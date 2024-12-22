<x-master title="article">
    <div class="text-center">
        <div class="card m-5 ">
            <div class="card-title">{{$article->intitule}}</div>
            <div class="card-body">
                <h4 class="card-title">{{$article->categorie}}</h4>
                <p class="card-text">{{$article->price}}</p>
            </div>
        </div>
        
    </div>
</x-master>