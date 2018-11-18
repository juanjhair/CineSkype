from django.shortcuts import render,HttpResponse
from core.models import Movie
from .models import Transaction
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

def example(request):

    if request.method == 'POST':
        dx = dict()    
        for k,v in request.POST.items():
            dx[k] = v
        
        movie = Movie.objects.get(id=dx['movie'])
        new = Transaction.objects.create(
            movie=movie,
            customer_name = dx['customer_name'],
            date_movie = dx['date_movie'],
            hour = dx['hour'],
            lot = dx['lot'],
            amount = dx['amount']
            
            )

    return render(request,"ventaEntrada/example.html")

