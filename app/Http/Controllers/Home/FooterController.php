<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Footer;
use Illuminate\Support\Carbon;

class FooterController extends Controller
{
    public function FooterSetup(Request $request,$id=null)
{
    if(!is_null($id)){
        $allfooter = Footer::find($id);
    }else{
        $allfooter = new Footer();
    }
    return view('admin.footer.footer_all', compact('allfooter'));
}
 // end method 

 public function UpdateFooter(Request $request,$id=null){

        if(is_null($id)){
            $footer = new Footer();
        }else{
            $footer = Footer::find($id);
        }
        $footer->number = $request->number;
        $footer->short_description = $request->short_description;
        $footer->adress = $request->adress;
        $footer->email = $request->email;
        $footer->facebook = $request->facebook;
        $footer->twitter = $request->twitter;
        $footer->copyright = $request->copyright;

        if($footer->save()){
            
            $notification = array(
                    'message' => 'Footer Updated Successfully', 
                    'alert-type' => 'info'
                );
        }else{
            $notification = array(
                    'message' => 'Failed', 
                    'alert-type' => 'danger'
                );
        }


        return redirect()->route('footer.setup',['id' => $footer->id])->with($notification);

        } 
        
        // end method 




}