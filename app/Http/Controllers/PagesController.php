<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('Pages.home');
    }
    public function about()
    {
        $news_array = $this->news_array();
        return view('Pages.about', compact("news_array"));
    }
    public function services()
    {
        return view('Pages.services');
    }
    public function portfolio()
    {
        return view('Pages.portfolio');
    }
    public function portfolio_details()
    {
        return view('Pages.portfolio_details');
    }
    public function blog()
    {
        $news_array = $this->news_array();

        return view('Pages.blog');
    }
    public function blog_details($news)
    {
        $array_data = [];
        $news_array = $this->news_array();
        foreach ($news_array as $key => $data) {
            if ($news == $key) {
                $array_data = $data;
            }
        }
        return view('Pages.blog_details', compact('array_data'));
    }
    public function team(Request $request)
    {
        $new_array = $this->team_detail_array();
        return view('Pages.team', compact('new_array'));
    }


    public function team_details($new_key)
    {

        $team_detail = $this->team_detail_array();
        $new_array = [];
        foreach ($team_detail  as $key => $value) {
            if ($new_key == $key) {
                $new_array[] = $value;
            }
        }

        return view('Pages.team_details', compact('new_array'));
    }
    public function full_stack()
    {
        return view('Pages.Services.full_stack');
    }
    public function mobile_app()
    {
        return view('Pages.Services.mobile_app');
    }
    public function ecommerce_stores()
    {
        return view('Pages.Services.ecommerce_stores');
    }
    public function ui_ux()
    {
        return view('Pages.Services.ui_ux');
    }
    public function cms_development()
    {
        return view('Pages.Services.cms_development');
    }
    public function custom_software()
    {
        return view('Pages.Services.custom_software');
    }
    public function contact()
    {
        return view('Pages.contact');
    }
    private function news_array()
    {
        $news_array = [
            'AGREMENT' => ['description' => 'Microsoft Launches New Windows 11 Features Update', 'date' => '17 April , 2024'],
            'COWORKING' => ['description' => 'Google Announces Major Upgrades to Google Cloud Platform', 'date' => ' 18 May , 2024'],
            'LEADERSHIP' => ['description' => 'Apple Unveils iOS 18 with New Features and Enhancements', 'date' => '19 June , 2024'],
        ];
        return $news_array;
    }
    public  function team_detail_array()
    {
        $array = [
            'Tanveer Ahmed' => [
                'img_url' => "/assets/images/coworking/team/team-01b.png",
                'name' => "Tanveer Ahmed",
                'description' => "As a visionary CEO and founder, I am known for my leadership and entrepreneurial spirit. With a solid foundation in business strategy and innovation, I have successfully built and guided my company to a leading position in the industry. My leadership style focuses on creating a collaborative and dynamic work environment, where growth and creativity thrive. I am committed to driving continuous growth and embracing technological advancements to stay ahead in the market. Under my guidance, the company has reached significant milestones and continues to expand its influence.",
                'phone' => '+(92) 343-4417145',
                'category' => "CEO & FOUNDER",
                'email' => 'ch.tanveer13@gmail.com',
                'university' => "Virtual Univeristy Faisalabad",
                'duration' => '1987 - 1992'
            ],
            'Haroon Arshad' => [
                'img_url' => "/assets/images/coworking/team/team-02b.png",
                'name' => "Haroon Arshad",
                'description' => "As a Project Manager, I am responsible for planning, executing, and closing projects within the specified timeline and budget. I oversee the project team, ensuring that tasks are completed efficiently and objectives are met. My role involves defining project scope, setting goals, and managing resources. I also handle risk assessment, resolve issues, and communicate progress to stakeholders. My goal is to deliver the project successfully while maintaining quality standards and aligning with organizational objectives.
",
                'phone' => '+(92) 3127502394',
                'category' => "Project Manager - HOD",
                'email' => 'haroonarshad230@gmail.com',
                'university' => "Virtual Univeristy Faisalabad",
                'duration' => '2012 - 2016',
            ],
            'Atif Rehman' => [
                'img_url' => "/assets/images/coworking/team/team-04b.png",
                'name' => "Atif Rehman",
                'description' => "As a Web Application Developer, I design, build, and maintain web-based applications to meet user needs and business goals. I work with various programming languages and frameworks, such as JavaScript, HTML, CSS, and backend technologies like Node.js or Python. My responsibilities include developing user interfaces, ensuring application functionality, and integrating with databases and external APIs. I also troubleshoot and debug code, optimize performance, and stay updated with emerging web technologies. I collaborate with designers, stakeholders, and other developers to deliver high-quality, scalable web solutions.",
                'phone' => '+(92) 313-7364068',
                'category' => "Python Developer",
                'email' => 'rehmanatif682@gmail.com',
                'university' => "University Of Agriculture Faisalabad",
                'duration' => '2020-2024'
            ],
            'Talha Rehman' => [
                'img_url' => "/assets/images/coworking/team/team-03b.png",
                'name' => "Talha Rehman",
                'description' => "As a Web Application Developer, I design, build, and maintain web-based applications to meet user needs and business goals. I work with various programming languages and frameworks, such as JavaScript, HTML, CSS, and backend technologies like Node.js or Python. My responsibilities include developing user interfaces, ensuring application functionality, and integrating with databases and external APIs. I also troubleshoot and debug code, optimize performance, and stay updated with emerging web technologies. I collaborate with designers, stakeholders, and other developers to deliver high-quality, scalable web solutions.",
                'phone' => '+(92) 330-0761164',
                'category' => "Php/Laravel Developer",
                'email' => 'itsme.talha64@gmail.com',
                'university' => "Virtual Univeristy Faisalabad",
                'duration' => '2023-2026 '
            ],
            'Shaharyar Ahmad' => [
                'img_url' => "/assets/images/coworking/team/team-03.jpg",
                'name' => "Shaharyar Ahmad",
                'description' => "As a Web Application Developer, I design, build, and maintain web-based applications to meet user needs and business goals. I work with various programming languages and frameworks, such as JavaScript, HTML, CSS, and backend technologies like Node.js or Python. My responsibilities include developing user interfaces, ensuring application functionality, and integrating with databases and external APIs. I also troubleshoot and debug code, optimize performance, and stay updated with emerging web technologies. I collaborate with designers, stakeholders, and other developers to deliver high-quality, scalable web solutions.",
                'phone' => '+(92) 312-7502394',
                'category' => "Php/Laravel Developer",
                'email' => 'itsme.shaharyar@gmail.com',
                'university' => "Government College Univeristy Faisalabad",
                'duration' => '2020-2024 '
            ],
        ];

        return  $array;
    }
}
