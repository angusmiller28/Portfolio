<?php

namespace App\Http\Controllers;

use App\Project;
use App\Tool;
use App\Social;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $projects = Project::all();

      return view('/projects')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'name' => 'required',
          'description' => 'required',
          'coverImage' => 'required',
          'displayImageFront' => 'required',
        ]);

        /////////////////////////
        // add project to database
        ////////////////////////
        $projects = new Project;
        $projects->name = $request->input('name');
        $projects->description = $request->input('description');

        // Validate and add coverImage to database
        if ($request->hasFile('coverImage')) {
          if($request->file('coverImage')->isValid()) {
              try {
                  $file = file_get_contents($request->file('coverImage')->path());
                  $image = base64_encode($file);
                  $projects->cover_image = $image;

              } catch (FileNotFoundException $e) {
                  echo "catch";

              }
          }
        }

        // Validate and add displayImageFront to database
        if ($request->hasFile('displayImageFront')) {
          if($request->file('displayImageFront')->isValid()) {
              try {
                  $file = file_get_contents($request->file('displayImageFront')->path());
                  $image = base64_encode($file);
                  $projects->display_image_front = $image;

              } catch (FileNotFoundException $e) {
                  echo "catch";

              }
          }
        }


        // Validate and add displayImageBack to database
        if ($request->hasFile('displayImageBack')) {
          if($request->file('displayImageBack')->isValid()) {
              try {
                  $file = file_get_contents($request->file('displayImageBack')->path());
                  $image = base64_encode($file);
                  $projects->display_image_back = $image;

              } catch (FileNotFoundException $e) {
                  echo "catch";

              }
          }
        }

        // Validate and add mobileImage to database
        if ($request->hasFile('mobileImage')) {
          if($request->file('mobileImage')->isValid()) {
              try {
                  $file = file_get_contents($request->file('mobileImage')->path());
                  $image = base64_encode($file);
                  $projects->mobile_image = $image;

              } catch (FileNotFoundException $e) {
                  echo "catch";

              }
          }
        }

        // Validate and add tabletImage to database
        if ($request->hasFile('tabletImage')) {
          if($request->file('tabletImage')->isValid()) {
              try {
                  $file = file_get_contents($request->file('tabletImage')->path());
                  $image = base64_encode($file);
                  $projects->tablet_image = $image;

              } catch (FileNotFoundException $e) {
                  echo "catch";
              }
          }
        }

        // Validate and add desktopImage to database
        if ($request->hasFile('desktopImage')) {
          if($request->file('desktopImage')->isValid()) {
              try {
                  $file = file_get_contents($request->file('desktopImage')->path());
                  $image = base64_encode($file);
                  $projects->desktop_image = $image;

              } catch (FileNotFoundException $e) {
                  echo "catch";
              }
          }
        }

        // Validate and add video to database
        if ($request->hasFile('video')) {
          if($request->file('video')->isValid()) {
              try {
                  $file = file_get_contents($request->file('video')->path());
                  $video = base64_encode($file);
                  $projects->video = $video;

              } catch (FileNotFoundException $e) {
                  echo "catch";

              }
          }
        }


        if ($request->input('subTitle'))
          $projects->sub_title = $request->input('subTitle');

        $projects->save();

        /////////////////////////
        // add tools to database
        ////////////////////////
        $tools = $request->input('tools');
        if (!empty($tools)){
          foreach ($tools as $toolName => $value) {
            $name = $toolName;
            foreach ($value as $toolLink => $s) {
              $link = $toolLink;
            }

            $tools = new Tool;
            $tools->name = $name;
            $tools->link = $link;
            $tools->project_fk = $projects->project_id;
            $tools->save();
          }
        }

        /////////////////////////
        // add socials to database
        ////////////////////////
        $socials = $request->input('socials');
        if (!empty($socials)){
          foreach ($socials as $socialName => $value) {
            $name = $socialName;
            foreach ($value as $socialLink => $s) {
              $link = $socialLink;
            }

            $socials = new Social;
            $socials->name = $name;
            $socials->link = $link;
            $socials->project_fk = $projects->project_id;
            $socials->save();
          }
        }

        return redirect('/admin')->with('success', 'Project Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project, $id)
    {
      $project = Project::where('project_id', $id)->get();
      $tools = Tool::where('project_fk', $id)->get();
      $socials = Social::where('project_fk', $id)->get();

      // break results project into variables
      foreach ($project as $p) {
        $projectName = $p->name;
        $projectSubTitle = $p->sub_title;
        $projectDescription = $p->description;
        $projectDisplayImageFront = $p->display_image_front;
        $projectVideo = $p->video;
        $projectDisplayImageFront = $p->display_image_front;
        $projectDisplayImageBack = $p->display_image_back;
        $projectMobileImage = $p->mobile_image;
        $projectTabletImage = $p->tablet_image;
        $projectDesktopImage = $p->desktop_image;
      }

      return view('project', ['projectName' => $projectName,
        'projectSubTitle' => $projectSubTitle,
        'projectDescription' => $projectDescription,
        'projectDisplayImageFront' => $projectDisplayImageFront])
        ->with('video', $projectVideo)
        ->with('displayImageFront', $projectDisplayImageFront)
        ->with('displayImageBack', $projectDisplayImageBack)
        ->with('mobileImage', $projectMobileImage)
        ->with('tabletImage', $projectTabletImage)
        ->with('desktopImage', $projectDesktopImage)
        ->with('tools', $tools)
        ->with('socials', $socials);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      // delete
      $project = Project::find($id);
      $project->delete();

      // redirect
      return Redirect('/admin')->with('success', 'Project Deleted!');
    }
}
