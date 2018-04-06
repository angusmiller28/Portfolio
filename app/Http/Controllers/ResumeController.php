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

      foreach ($resumes as $r) {
        $resumeDescription = $r->description;
        $resumeCoverLetter = $r->cover_letter;
        $resumeEmail = $r->email;
        $resumeAddress = $r->address;
        $resumeTranscript = $r->transcript;
        $resumePhoneNumber = $r->phone_number;
        $resumeFacebookLink = $r->facebook_link;
        $resumeLinkedinLink = $r->linkedin_link;
        $resumeGithubLink = $r->github_link;
        $resumeTwitterLink = $r->twitter_link;
        $resumeGoogleLink = $r->google_link;
        $resumeRedditLink = $r->reddit_link;
        $resumeFacebookName = $r->facebook_name;
        $resumeLinkedinName = $r->linkedin_name;
        $resumeGithubName = $r->github_name;
        $resumeTwitterName = $r->twitter_name;
        $resumeGoogleName = $r->google_name;
        $resumeRedditName = $r->reddit_name;
      }

      return view('welcome')
      ->with('description', $resumeDescription)
      ->with('coverLetter', $resumeCoverLetter)
      ->with('email', $resumeEmail)
      ->with('address', $resumeAddress)
      ->with('transcriptLink', $resumeTranscript)
      ->with('phoneNumber', $resumePhoneNumber)
      ->with('facebookLink', $resumeFacebookLink)
      ->with('linkedinLink', $resumeLinkedinLink)
      ->with('githubLink', $resumeGithubLink)
      ->with('twitterLink', $resumeTwitterLink)
      ->with('googleLink', $resumeGoogleLink)
      ->with('redditLink', $resumeRedditLink)
      ->with('facebookName', $resumeFacebookName)
      ->with('linkedinName', $resumeLinkedinName)
      ->with('githubName', $resumeGithubName)
      ->with('twitterName', $resumeTwitterName)
      ->with('googleName', $resumeGoogleName)
      ->with('redditName', $resumeRedditName);
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

      // links
      $resumes->facebook_link = $request->input('facebook_link');
      $resumes->linkedin_link = $request->input('linkedin_link');
      $resumes->github_link = $request->input('github_link');
      $resumes->twitter_link = $request->input('twitter_link');
      $resumes->google_link = $request->input('google_link');
      $resumes->reddit_link = $request->input('reddit_link');
      $resumes->cover_letter = $request->input('cover-letter');

      $resumes->facebook_name = $request->input('facebook_name');
      $resumes->linkedin_name = $request->input('linkedin_name');
      $resumes->github_name = $request->input('github_name');
      $resumes->twitter_name = $request->input('twitter_name');
      $resumes->google_name = $request->input('google_name');
      $resumes->reddit_name = $request->input('reddit_name');

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
