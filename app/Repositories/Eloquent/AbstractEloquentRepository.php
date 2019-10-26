<?php
namespace App\Repositories\Eloquent;
use App\Repositories\Contracts\BaseRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

abstract class AbstractEloquentRepository implements BaseRepository
{
    /**
     * @var \Illuminate\Database\Eloquent\Model An instance of the Eloquent Model
     */
    protected $model;
    /**
     * @param Model $model
     */
    public function __construct($model)
    {
        $this->model = $model;
    }
    /**
     * @inheritdoc
     */
    public function find($id)
    {
        return $this->model->find($id);
    }
    /**
     * @inheritdoc
     */
    public function all()
    {
        return $this->model->orderBy('created_at', 'DESC')->get();
    }
    /**
     * @inheritdoc
     */
    public function allWithBuilder() : Builder
    {
        return $this->model->query();
    }
    /**
     * @inheritdoc
     */
    public function paginate($perPage = 15)
    {
        return $this->model->orderBy('created_at', 'DESC')->paginate($perPage);
    }
    /**
     * @inheritdoc
     */
    public function create($data)
    {
        return $this->model->create($data);
    }
    /**
     * @inheritdoc
     */
    public function update($model, $data)
    {
        $model->update($data);
        return $model;
    }
    /**
     * @inheritdoc
     */
    public function destroy($model)
    {
        return $model->delete();
    }
    /**
     * @inheritdoc
     */
    public function findBySlug($slug)
    {
        return $this->model->where('slug', $slug)->first();
    }
    /**
     * @inheritdoc
     */
    public function findByAttributes(array $attributes)
    {
        $query = $this->buildQueryByAttributes($attributes);
        return $query->first();
    }
    /**
     * @inheritdoc
     */
    public function getByAttributes(array $attributes, $orderBy = null, $sortOrder = 'asc')
    {
        $query = $this->buildQueryByAttributes($attributes, $orderBy, $sortOrder);
        return $query->get();
    }
    /**
     * Build Query to catch resources by an array of attributes and params
     * @param  array $attributes
     * @param  null|string $orderBy
     * @param  string $sortOrder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    private function buildQueryByAttributes(array $attributes, $orderBy = null, $sortOrder = 'asc')
    {
        $query = $this->model->query();
        foreach ($attributes as $field => $value) {
            $query = $query->where($field, $value);
        }
        if (null !== $orderBy) {
            $query->orderBy($orderBy, $sortOrder);
        }
        return $query;
    }
    /**
     * @inheritdoc
     */
    public function findByMany(array $ids)
    {
        $query = $this->model->query();
        return $query->whereIn("id", $ids)->get();
    }
    /**
     * Load relations
     *
     * @param array|string $relations
     *
     * @return $this
     */
    public function with($relations)
    {
        $this->model = $this->model->with($relations);
        return $this;
    }
    public function orderBy($column, $direction = 'asc')
    {
        $this->model = $this->model->orderBy($column, $direction);
        return $this;
    }
    /**
     * Alias of All method
     *
     * @param array $columns
     *
     * @return mixed
     */
    public function getColumns($columns = ['*'])
    {
        return $this->all($columns);
    }
    /**
     * @inheritdoc
     */
    public function clearCache()
    {
        return true;
    }
}
