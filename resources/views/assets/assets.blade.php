<div class="navigate">
    <?php if($title=="Новости"){
                            ?>
    <a href="/news/Новости" class="navigate__link"></a>
    <div class="navigate__name">Новости</div>
    <?php
                             } else  {
                            ?>
    <a href="/news/Новости" class="navigate__link">Новости</a>
    <span>/</span>

    <div class="navigate__name">{{ $title }}</div>
    <?php
                         }
                        ?>

</div>








<?php
        // public function review(){
    //     $review=new NewsModel();

    //     // dd($review->all());

    //     dd($review->all()->where('newsType', "Политика")->keys());
    //     return view();
    // }

    public function index(Request $request)
    {
        $posts = NewsModel::paginate(3);
        if ($request->ajax()) {
            $view = view("data", compact("posts"))->render();
            return response()->json(["html" => $view]);
        }
        return view("post", compact("posts"));
    }

    // public function news($NewsTheme)
    // {

    //     if ($NewsTheme == "Новости" || $NewsTheme == "Политика" || $NewsTheme == "Экономика" || $NewsTheme == "Спорт" || $NewsTheme == "НаукаИтехно" || $NewsTheme == "Игры" || $NewsTheme == "Мир") {

    //         $review = new NewsModel();
    //         if ($NewsTheme == "Новости") {
    //             return view("News_list", ['title' => $NewsTheme, "data" => $review->all()]);
    //         } else {
    //             return view("News_list", ['title' => $NewsTheme, "data" => $review->all()->where("newsType", $NewsTheme)]);
    //         }
    //     } else {
    //         return redirect('/');
    //     }
    // }
    ?>
 <script>
    // $('#Content1').append(`
    //     @include('main')
    // `);

</script>


<?php
$count = 0;
?>
@foreach ($data as $el)
    @if ($count == 4)
        <?php
        break; ?>
    @endif

    <?php
    $data->pull($data->keys()[0]);
    $count++;
    ?>
@endforeach
