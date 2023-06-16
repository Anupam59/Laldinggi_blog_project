<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SiteCommonModel;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SiteCommonController extends Controller
{
    public function AboutEdit(){
        $id = 1;
        $SiteCommon = SiteCommonModel::where('site_common_id',$id)
            ->select(
                'site_adout_title',
                'site_adout_bn_title',
                'site_adout_description',
                'site_adout_bn_description',
                'site_adout_img',
            )->first();

        return view('Admin/Pages/SiteCommon/About',compact('SiteCommon'));
    }

    public function AboutUpdate(Request $request){
        $id = 1;
        $data =  array();
        $data['site_adout_title'] = $request->site_adout_title;
        $data['site_adout_bn_title'] = $request->site_adout_bn_title;
        $data['site_adout_description'] = $request->site_adout_description;
        $data['site_adout_bn_description'] = $request->site_adout_bn_description;
        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $img =  $request->file('site_adout_img');
        if ($img){
            $ImageName =time().'.'.$img->getClientOriginalExtension();
            $Path = "Images/site-about/";
            $ResizeImage = Image::make($img)->resize(490,380);
            $url = $Path.$ImageName;
            $url_database = "/".$Path.$ImageName;
            $ResizeImage ->save($url);
            $OldData = SiteCommonModel::where('site_common_id','=',$id)->select('site_adout_img')->first();
            $OldImage = $OldData->site_adout_img;
            $OldImageUrl = substr($OldImage, 1);
            if ($OldImage){
                unlink($OldImageUrl);
                $data['site_adout_img'] = $url_database;
            }else{
                $data['site_adout_img'] = $url_database;
            }
        }

        $res = SiteCommonModel::where('site_common_id','=',$id)->update($data);


        if ($res){
            return back()->with('success_message','About Update Successfully!');
        }else{
            return back()->with('error_message','About Update Fail!');
        }

    }


    public function CommunicationEdit(){
        $id = 1;
        $SiteCommon = SiteCommonModel::where('site_common_id',$id)
            ->select(
                'site_fb_link',
                'site_tw_link',
                'site_yt_link',
                'site_ig_link',
                'site_communication',
                'site_bn_communication',
            )->first();
        return view('Admin/Pages/SiteCommon/Communication',compact('SiteCommon'));
    }



    public function CommunicationUpdate(Request $request){
        $id = 1;
        $data =  array();
        $data['site_fb_link'] = $request->site_fb_link;
        $data['site_tw_link'] = $request->site_tw_link;
        $data['site_yt_link'] = $request->site_yt_link;
        $data['site_ig_link'] = $request->site_ig_link;
        $data['site_communication'] = $request->site_communication;
        $data['site_bn_communication'] = $request->site_bn_communication;

        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = SiteCommonModel::where('site_common_id','=',$id)->update($data);

        if ($res){
            return back()->with('success_message','About Update Successfully!');
        }else{
            return back()->with('error_message','About Update Fail!');
        }

    }



    public function PolicyEdit(){
        $id = 1;
        $SiteCommon = SiteCommonModel::where('site_common_id',$id)
            ->select(
                'site_privacy_policy',
                'site_bn_privacy_policy',
            )->first();
        return view('Admin/Pages/SiteCommon/Policy',compact('SiteCommon'));
    }



    public function PolicyUpdate(Request $request){
        $id = 1;
        $data =  array();
        $data['site_privacy_policy'] = $request->site_privacy_policy;
        $data['site_bn_privacy_policy'] = $request->site_bn_privacy_policy;

        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = SiteCommonModel::where('site_common_id','=',$id)->update($data);

        if ($res){
            return back()->with('success_message','About Update Successfully!');
        }else{
            return back()->with('error_message','About Update Fail!');
        }

    }


    public function TermsEdit(){
        $id = 1;
        $SiteCommon = SiteCommonModel::where('site_common_id',$id)
            ->select(
                'site_terms',
                'site_bn_terms',
            )->first();
        return view('Admin/Pages/SiteCommon/Terms',compact('SiteCommon'));
    }



    public function TermsUpdate(Request $request){
        $id = 1;
        $data =  array();
        $data['site_terms'] = $request->site_terms;
        $data['site_bn_terms'] = $request->site_bn_terms;

        $data['modifier'] = 1;
        $data['modified_date'] = date("Y-m-d h:i:s");

        $res = SiteCommonModel::where('site_common_id','=',$id)->update($data);

        if ($res){
            return back()->with('success_message','About Update Successfully!');
        }else{
            return back()->with('error_message','About Update Fail!');
        }

    }

}
