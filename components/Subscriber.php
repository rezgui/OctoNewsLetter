<?php namespace Rezgui\NewsLetter\Components;

use Cms\Classes\ComponentBase;

class Subscriber extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Subscriber Component',
            'description' => 'Form for adding new subscriber'
        ];
    }

    public function defineProperties()
    {
        return [
            'urlToUnsubscribe' => [
                'title'       => 'Url Unsubscribe',
                'description' => 'Path for generate a url to unsubscribe method',
                'type' => 'string',
                'default'     => 'unsubscribe'
            ],
            'thanksMessage' => [
                'title'       => 'Thanks Message',
                'description' => 'Thanks message for new subscribers',
                'type' => 'string',
                'default'     => 'Thanks for subscribe!'
            ],
            'errorMessage' => [
                'title'       => 'Error Message',
                'description' => 'Message for error thown',
                'type' => 'string',
                'default'     => 'Email already exists!'
            ]
        ];
    }

    public function onRun()
    {
        $this->addJs('/plugins/rezgui/newsletter/assets/javascript/subscribe-scripts.js');
    }

    public function onAddSubscriber()
    {
        $data = [
            "email" => post('email'),			
            "latitude" => post('latitude'),
            "longitude" => post('longitude'),
            "code" => Str::random(20)
        ];
        
        try{

            $subscriber = Subs::create($data);
            $data['url'] = URL::to($this->property('urlToUnsubscribe')."/".$data['code']);
            \Mail::send('rezgui.newsletter::mail.subscribe', $data, function($message) use ($data) {
                $message->to($data['email'], 'Hi New Subscriber');
            });

            $this->page['result'] = $this->property('thanksMessage');
        }
        catch (\Exception $e){

            $this->page['result'] = $this->property('errorMessage');

        }
        
    }

}