from django.shortcuts import render
from core.models import Movie
# Create your views here.

def ventaEntrada(request,movie_id = 1):
    try:
        movie = Movie.objects.get(pk=movie_id)
    except movie.DoesNotExist:
        raise Http404
    return render(request,'ventaEntrada/compra.html',{'movie':movie,'message':'es la peli -> '})

def about(request):
    return render(request,'ventaEntrada/about.html')

def extra(request):
    return render(request,"ventaEntrada/other.html")