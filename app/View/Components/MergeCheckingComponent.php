<?php

namespace App\View\Components;

use Illuminate\View\Component;

class MergeCheckingComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $message;
    public $type;
    public  $hasError = 1;
    public function __construct($message,$type,$hasError)
    {
        //
        $this->message = $message;
        $this->type = $type;
        $this->hasError = $hasError;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // return function (array $data) {
        //     // $data['componentName'];
        //     // $data['attributes'];
        //     // $data['slot'];
        //     // $data = "Data";
        //     $data = $data;
        //     // dd($data);
    
        //     // return '<div>Components content From Render Method '.$data.' </div> ';
        // };
        return view('components.merge-checking-component');
    }
}
