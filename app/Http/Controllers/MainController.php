<?php

namespace App\Http\Controllers;

use App\Models\NewsModel;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(Request $request)
    {

        // if ($request->ajax()) {
        //     $view = view("newsLoad", compact("data"))->render();
        //     return response()->json(["html" => $view]);
        // }

        return view("index");
    }


    public function main()
    {
        $dataPolitic = NewsModel::where("newsType", "Политика")->orderBy('id', 'DESC')->paginate(8);
        $dataEconomy = NewsModel::where("newsType", "Экономика")->orderBy('id', 'DESC')->paginate(5);
        $dataSport = NewsModel::where("newsType", "Спорт")->orderBy('id', 'DESC')->paginate(2);
        $dataScience = NewsModel::where("newsType", "НаукаИтехно")->orderBy('id', 'DESC')->paginate(3);
        $dataGames = NewsModel::where("newsType", "Игры")->orderBy('id', 'DESC')->paginate(2);
        $dataWorld = NewsModel::where("newsType", "Мир")->orderBy('id', 'DESC')->paginate(5);

        return view("inlineContent.main", ['dataPolitic' => $dataPolitic, 'dataEconomy' => $dataEconomy, 'dataSport' => $dataSport, 'dataGames' => $dataGames, 'dataScience' => $dataScience, 'dataWorld' => $dataWorld]);
    }
    private $x;
    public function main_order()
    {

        $dataPolitic = NewsModel::where("newsType", "Политика")->orderBy('id', 'DESC')->paginate(4);

        $this->x = $dataPolitic;
        return view("inlineContent.main-order", ['dataPolitic' => $dataPolitic]);
    }
    public function news_column1(Request $request)
    {
        $data = NewsModel::orderBy('id', 'DESC')->paginate(10);
        $this->main_order();
        $this->x;
        if (stristr($request, 'page')) {
            $view = view("inlineContent.news-column1", compact("data"), ["x" => $this->x])->render();
            return response()->json(["html" => $view]);
        }
    }
    public function news_column2(Request $request)
    {
        $data = NewsModel::where("newsType", "Политика")->orderBy('id', 'DESC')->paginate(10);
        $this->main_order();
        $this->x;
        if (stristr($request, 'page')) {
            $view = view("inlineContent.news-column2", compact("data"), ["x" => $this->x])->render();
            return response()->json(["html" => $view]);
        }
    }

    public function newsM($NewsTheme)
    {
        if ($NewsTheme == "news"){
            return redirect('/news/Новости');
        } else {
            return redirect('/');
        }
    }


    public function news($NewsTheme, Request $request)
    {

        if ($NewsTheme == "Новости" || $NewsTheme == "Политика" || $NewsTheme == "Экономика" || $NewsTheme == "Спорт" || $NewsTheme == "НаукаИтехно" || $NewsTheme == "Игры" || $NewsTheme == "Мир") {

            if ($NewsTheme == "Новости") {

                $data = NewsModel::orderBy('id', 'DESC')->paginate(7);
            } else {
                $data = NewsModel::where("newsType", $NewsTheme)->orderBy('id', 'DESC')->paginate(7);
            }

            if ($request->ajax()) {
                $view = view("dataLoad", compact("data"))->render();
                return response()->json(["html" => $view]);
            }
            return view("News_list", compact("data"), ['title' => $NewsTheme]);
        } else {
            return redirect('/');
        }
    }


    public function newsName($NewsTheme, $newsName, Request $request)
    {

        if ($NewsTheme == "Новости" || $NewsTheme == "Политика" || $NewsTheme == "Экономика" || $NewsTheme == "Спорт" || $NewsTheme == "НаукаИтехно" || $NewsTheme == "Игры" || $NewsTheme == "Мир") {

            if ($NewsTheme == "Новости") {


                $data = NewsModel::where("titleUrl", "!=", $newsName)->orderBy('id', 'DESC')->paginate(1);
                $data2 = NewsModel::where("titleUrl", $newsName)->orderBy('id', 'DESC')->paginate(1);
            } else {
                $data = NewsModel::where("newsType", $NewsTheme)->orderBy('id', 'DESC')->where("titleUrl", "!=", $newsName)->paginate(1);
                $data2 = NewsModel::where("titleUrl", $newsName)->orderBy('id', 'DESC')->paginate(1);
            }




            if ($request->ajax()) {
                $view = view("newsLoad", compact("data"))->render();
                return response()->json(["html" => $view]);
            }

            if($data2->isEmpty()){
                return redirect('/');
            }

            return view("news", compact("data2"), ['title' => $NewsTheme]);
        } else {
            return redirect('/');
        }
    }
    public function search(Request $request)
    {
        $filter = $request->text;

        $data = NewsModel::where("title", 'LIKE', '%'.$filter.'%')->orderBy('id', 'DESC')->paginate(10);

        return view("search", ['data' => $data]);
    }
}
