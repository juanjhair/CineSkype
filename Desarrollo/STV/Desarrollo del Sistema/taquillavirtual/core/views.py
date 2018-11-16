from django.shortcuts import render
from .models import Movie
# Create your views here.


def home(request):
    movies = Movie.objects.all()
    return render(request,"core/home.html",{'movies':movies})

def seeMore(request):
    return render(request,"core/other.html")