<?php

namespace App\Http\Controllers;

use App\Resume;
use App\Reference;
use App\Education;
use App\Certificate;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $resumes = Resume::all();

      return 12;
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
        'description' => 'required',
        'email' => 'required',
        'address' => 'required',
        'phone' => 'required',
        'transcript' => 'required',
      ]);

      /////////////////////////
      // add resume to database
      ////////////////////////
      $resumes = new Resume;

      // check if should update
      if($request->input('resume_id'))
        $resumes = Resume::find($request->input('resume_id'));

      $resumes->description = $request->input('description');
      $resumes->email = $request->input('email');
      $resumes->address = $request->input('address');
      $resumes->phone = $request->input('phone');
      $resumes->transcript = $request->input('transcript');

      if($request->input('facebook_link'))
          $resumes->facebook_link;
      if($request->input('linkedin_link'))
          $resumes->linkedin_link;
      if($request->input('github_link'))
          $resumes->github_link;
      if($request->input('twitter_link'))
          $resumes->twitter_link;
      if($request->input('google_link'))
          $resumes->google_link;
      if($request->input('reddit_link'))
          $resumes->reddit_link;
      if($request->input('cover-letter'))
          $resumes->cover_letter;

      $resumes->save();

      //////////////////////////////
      // add education to database
      //////////////////////////////
      $educations = $request->input('educations');
      if (!empty($educations)){
        foreach ($educations as $educationName => $value) {
          $name = $educationName;

          $educations = new Education;
          $educations->name = $name;
          $educations->resume_fk = $resumes->resume_id;
          $educations->save();
        }
      }


      //////////////////////////////
      // add certificate to database
      //////////////////////////////
      $certificates = $request->input('certificates');
      if (!empty($certificates)){
        foreach ($certificates as $certificateName => $value) {
          $name = $certificateName;

          $certificates = new Certificate;
          $certificates->name = $name;
          $certificates->resume_fk = $resumes->resume_id;
          $certificates->save();
        }
      }

      ////////////////////////////////
      // add references to database
      ///////////////////////////////
      $references = $request->input('references');
      if (!empty($references)){
        foreach ($references as $referenceName => $value) {
          $name = $referenceName;

          foreach ($value as $startDate => $value2) {
            $start_date = $startDate;

            foreach ($value2 as $endDate => $value3) {
              $end_date = $endDate;

              foreach ($value3 as $referenceDescription => $value4) {
                $description = $referenceDescription;

                foreach ($value4 as $referenceBossTitle => $value5) {
                  $boss_title = $referenceBossTitle;

                  foreach ($value5 as $referenceBossName => $value6) {
                    $boss_name = $referenceBossName;

                    foreach ($value6 as $referenceAddressName => $value7) {
                      $address_name = $referenceAddressName;

                      foreach ($value7 as $referencePhoneNumber => $value8) {
                        $phone_number = $referencePhoneNumber;

                        foreach ($value8 as $referenceEmail => $s) {
                          $email = $referenceEmail;
                        }
                      }
                    }
                  }
                }
              }
            }
          }

          $references = new Reference;

          $references->name = $name;
          $references->start_date = $start_date;
          $references->end_date = $end_date;
          $references->description = $description;
          $references->boss_title = $boss_title;
          $references->boss_name = $boss_name;
          $references->address_name = $address_name;
          $references->phone_number = $phone_number;
          $references->email = $email;
          $references->resume_fk = $resumes->resume_id;
          $references->save();
        }
      }

      ///////////////////////////////////////
      // remove references from database
      //////////////////////////////////////
      // check if should update
      if($request->input('resume_id'))
        $references = Reference::find($request->input('reference_id'));
        
      $references = $request->input('referencesDelete');
      if (!empty($references)){
        foreach ($references as $referenceId => $value) {
          $r = Reference::find($referenceId);
          $r->delete();
        }
      }

      if($request->input('resume_id'))
        return redirect('/admin')->with('success', 'Resume Updated');

      return redirect('/admin')->with('success', 'Resume Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function show(Resume $resume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function edit(Resume $resume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        return 123;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resume $resume)
    {
        //
    }
}
