@extends ('layouts.simple')
@section ('main-content')


<div class="container">

  <div class="row">

    <div class="col-md-8">
    @foreach($posts as $post)
   <article id="">
     <div style="height: 1px; background-color: white;"></div>
        <header>
          <div class="meta">

            Written by <span class="author">Author Name</span> <span class="date">1/30/16</span> | <span class="comments"><span class="badge">4</span> Comments</span>
          </div>
          <h2>
            <a href="">{{$post->title}}</a></h2>
        </header>
        <div class="entry-content">
          <a href="">
            <img src="storage/{{$post->image}}" alt="" class="img-fluid" width="750" height="420" />
          </a>
          <p class="lead">{{$post->meta_description}} &hellip;</p>

         <a href="/post/{{$post->slug}}" class="btn btn-outline btn-xl js-scroll-trigger">Descubrir ahora!</a>
        </div>
        <br>
       <div style="height: 1px; background-color: white;"></div>
      </article>
@endforeach
    </div>
    <aside class="col-md-4">

     <h2>Mi blog</h2>

   <p>
     
     Bueno, el caso es que como te decía al inicio del post, un blog es realmente una página web. Pero la diferencia con el resto de páginas web “normales” es que se centra en mostrar publicaciones (llamadas posts o artículos) como si fuera un diario personal.

Y por supuesto, no todas las páginas web son blogs.

Hay muchas páginas web que NO tienen un apartado de blog (si no quieren): tiendas online, sitios de información turística, páginas de empresas que muestran quiénes son y cómo contactar con ellos, etc.
   </p>





<div class="container">
<h3>Follow Us</h3>
<div class="social">
  <a href=""><i class="fa fa-3x fa-facebook-square"></i></a>
  <a href=""><i class="fa fa-3x fa-twitter-square"></i></a>
  <a href=""><i class="fa fa-3x fa-linkedin-square"></i></a>
  <a href=""><i class="fa fa-3x fa-google-plus-square"></i></a>
</div>
  
</div>
      
      
      
    </aside>
  </div>
</div>
@endsection