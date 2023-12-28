<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DistrictModel;
use App\Models\MenuItemModel;
use App\Models\MenuSubItemModel;
use App\Models\SubCategoryModel;
use App\Models\SubSubCategoryModel;
use App\Models\UpazilaModel;
use Illuminate\Http\Request;

class AxiosCallController extends Controller
{
    public function SubCategoryGetData(Request $request){
        $cat_id = $request->input('cat_id');
        $result = SubCategoryModel::where('cat_id','=',$cat_id)->where('status',1)->select('sub_cat_id','sub_cat_title')->get();
        $data = array();
        $data[] = "<option value='' selected>Select One</option>";
        foreach ($result as $row){
            $data[] = "<option value='".$row->sub_cat_id."'>".$row->sub_cat_title."</option>";
        }
        return $data;
    }

    public function SubSubCategoryGetData(Request $request){
        $sub_cat_id = $request->input('sub_cat_id');
        $result = SubSubCategoryModel::where('sub_cat_id','=',$sub_cat_id)->where('status',1)->select('sub_sub_cat_id','sub_sub_cat_title')->get();
        $data = array();
        $data[] = "<option value='' selected>Select One</option>";
        foreach ($result as $row){
            $data[] = "<option value='".$row->sub_sub_cat_id."'>".$row->sub_sub_cat_title."</option>";
        }
        return $data;
    }

    public function MenuItemGetData(Request $request){
        $menu_id = $request->input('menu_id');
        $result = MenuItemModel::where('menu_id','=',$menu_id)->where('status',1)->select('menu_item_id','menu_item_title')->get();
        $data = array();
        $data[] = "<option value='' selected>Select One</option>";
        foreach ($result as $row){
            $data[] = "<option value='".$row->menu_item_id."'>".$row->menu_item_title."</option>";
        }
        return $data;
    }

    public function MenuSubItemGetData(Request $request){
        $menu_item_id = $request->input('menu_item_id');
        $result = MenuSubItemModel::where('menu_item_id','=',$menu_item_id)->where('status',1)->select('menu_sub_item_id','menu_sub_item_title')->get();
        $data = array();
        $data[] = "<option value='' selected>Select One</option>";
        foreach ($result as $row){
            $data[] = "<option value='".$row->menu_sub_item_id."'>".$row->menu_sub_item_title."</option>";
        }
        return $data;
    }

    public function DistrictGetData(Request $request){
        $division_id = $request->input('division_id');
        $result = DistrictModel::where('division_id','=',$division_id)->where('status',1)->select('district_id','district_name')->get();
        $data = array();
        $data[] = "<option value='' selected>Select One</option>";
        foreach ($result as $row){
            $data[] = "<option value='".$row->district_id."'>".$row->district_name."</option>";
        }
        return $data;
    }

    public function UpazilaGetData(Request $request){
        $district_id = $request->input('district_id');
        $result = UpazilaModel::where('division_id','=',$district_id)->where('status',1)->select('upazila_id','upazila_name')->get();
        $data = array();
        $data[] = "<option value='' selected>Select One</option>";
        foreach ($result as $row){
            $data[] = "<option value='".$row->upazila_id."'>".$row->upazila_name."</option>";
        }
        return $data;
    }
}
