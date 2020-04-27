<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  private $pages;

    public function __construct()
    {
        $this->pages['home'] =
      array(
        'title' => "home",
        'content' => "Home blog is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries (posts)."
      );
      array(
        'title' => "about",
        'content' => "About blog is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries (posts)."
      );
      array(
        'title' => "contact",
        'content' => "Contact blog is a discussion or informational website published on the World Wide Web consisting of discrete, often informal diary-style text entries (posts)."
      );
    }

    public function index() {
      $data['page'] = $this->pages['home'];
      return view('page', $data);
    }
    public function singlePage($id) {
      $data['page'] = $this->pages[$id];
      return view('page', $data);
    }
    public function contactPage() {
      $data['page'] = $this->pages['contact'];
      return view('contact', $data);
    }
    public function contactSaveAction(Request $request) {
      $method = $request->method();
      if ($method == "POST") {
        $iNama = $request->input('nama');
        $iEmail = $request->input('email');
        $iPesan = $request->input('pesan');

        echo "Nama  : " . $iNama . "<br>" .
             "Email  : " . $iEmail . "<br>" .
             "Pesan  : " . $iPesan;

             return redirect()->action(
              'PageController@contactPage',
              [
                'iNama' => $request->input('nama'),
                'iEmail' => $request->input('email'),
                'iPesan' => $request->input('pesan')
              ]);
}else{
      $iNama = $request->get('nama');
      $iEmail = $request->get('email');
      $iPesan= $request->get('pesan');

      echo "Nama  : " . $iNama . "<br>" .
           "Email  : " . $iEmail . "<br>" .
           "Pesan  : " . $iPesan;
      }
}
}