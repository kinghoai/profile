<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\Contracts\SkillRepositoryInterface;
use App\Repositories\Contracts\ExperienceRepositoryInterface;
use App\Repositories\Contracts\EducationRepositoryInterface;
use App\Repositories\Contracts\ProjectRepositoryInterface;

class UserController extends Controller
{
	private $userRepository;
	private $skillRepository;
	private $experienceRepository;
	private $educationRepository;
	private $projectRepository;

	public function __construct(
		UserRepositoryInterface $userRepository,
		SkillRepositoryInterface $skillRepository,
		ExperienceRepositoryInterface $experienceRepository,
		EducationRepositoryInterface $educationRepository,
		ProjectRepositoryInterface $projectRepository )
	{
		$this->userRepository = $userRepository;
		$this->skillRepository = $skillRepository;
		$this->experienceRepository = $experienceRepository;
		$this->educationRepository = $educationRepository;
		$this->projectRepository = $projectRepository;
	}

	public function show($slug)
    {
    	$user = $this->userRepository->findBySlug($slug);
	    if(!$user) {abort(404);}
    	$knowledgeSkills = $this->skillRepository->getByAttributes(['user_id'=>$user->id, 'type'=>'knowledge']);
    	$skillSkills = $this->skillRepository->getByAttributes(['user_id'=>$user->id, 'type'=>'skill']);
    	$languageSkills = $this->skillRepository->getByAttributes(['user_id'=>$user->id, 'type'=>'language']);
    	$experiences = $this->experienceRepository->getByAttributes(['user_id'=>$user->id]);
    	$educations = $this->educationRepository->getByAttributes(['user_id'=>$user->id]);
    	$projects = $this->projectRepository->getByAttributes(['user_id'=>$user->id]);
    	foreach ($projects as $key=>$project) {
		    $project['featured'] = $project->getMedia('image')->last() ? $project->getMedia('image')->last()->getUrl('slide'):'';
		    $project['slide'] = $project->getMedia('slide') ? $project->getMedia('slide') : [];
	    }
    	$slides = $user->getMedia('slide') ? $user->getMedia('slide') : '';
	    $thumb = $user->getMedia('image')->last() ? $user->getMedia('image')->last()->getUrl('thumb') : '';
        return view('frontend.user.show', compact(
        	'user', 'knowledgeSkills', 'experiences', 'educations', 'projects', 'skillSkills', 'languageSkills', 'slides', 'thumb'
        ));
	}
	
	public function showHome()
    {
    	$user = $this->userRepository->findBySlug('lam-thanh-hoai');
	    if(!$user) {abort(404);}
    	$knowledgeSkills = $this->skillRepository->getByAttributes(['user_id'=>$user->id, 'type'=>'knowledge']);
    	$skillSkills = $this->skillRepository->getByAttributes(['user_id'=>$user->id, 'type'=>'skill']);
    	$languageSkills = $this->skillRepository->getByAttributes(['user_id'=>$user->id, 'type'=>'language']);
    	$experiences = $this->experienceRepository->getByAttributes(['user_id'=>$user->id]);
    	$educations = $this->educationRepository->getByAttributes(['user_id'=>$user->id]);
    	$projects = $this->projectRepository->getByAttributes(['user_id'=>$user->id]);
    	foreach ($projects as $key=>$project) {
		    $project['featured'] = $project->getMedia('image')->last() ? $project->getMedia('image')->last()->getUrl('slide'):'';
		    $project['slide'] = $project->getMedia('slide') ? $project->getMedia('slide') : [];
	    }
    	$slides = $user->getMedia('slide') ? $user->getMedia('slide') : '';
	    $thumb = $user->getMedia('image')->last() ? $user->getMedia('image')->last()->getUrl('thumb') : '';
        return view('frontend.user.show', compact(
        	'user', 'knowledgeSkills', 'experiences', 'educations', 'projects', 'skillSkills', 'languageSkills', 'slides', 'thumb'
        ));
    }
}
