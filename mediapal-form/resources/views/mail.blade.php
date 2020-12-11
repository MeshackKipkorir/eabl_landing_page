@component('mail::message')
Hello Mesh, <br>
Thank you for expressing interest in MediaPal <br/>

Download our proposal below:

@component('mail::button', ['url' => 'https://demos.mediapal.net/Fursa/app.apk'])
    Download Proposal
@endcomponent

@endcomponent
