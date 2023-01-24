<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;

class VideoTutorials extends Component
{
    public array $videoTutorials = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->videoTutorials = [
            [
                'videoId' => 'Eccg4YdmYJ8',
                'title' => 'PHP Tutorial for Absolute Beginners - PHP Course 2020',
                'description' => 'This is 2 hours PHP Course and in this course you will learn all the basics you need in PHP. This is good starting point if you want to learn PHP.'
            ],
            [
                'videoId' => 'Z9uxseJ4PC0',
                'title' => 'Fiverr Skills Series Video # 1 - Wordpress Website development',
                'description' => 'You will build a wordpres website, which includes Home, About Us, Contact Us pages. Also you will learn how to deliver it to client.'
            ],
            [
                'videoId' => 'u93mcRH1H8k',
                'title' => 'Excel Tips and Tricks',
                'description' => 'Video playlist which will show you tips and tricks of Microsoft Excel. This will help you understand how easily you can start working on excel with more power.'
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.video-tutorials');
    }
}
