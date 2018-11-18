from django.shortcuts import render
from .models import Movie
# Create your views here.

def home(request):
    movies = Movie.objects.all()[:6]
    return render(request,"core/home.html",{'movies':movies})
