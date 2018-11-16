"""taquillavirtual URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/2.1/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path, re_path

from core import views
from ventaEntrada import views as views_venta

from django.conf import settings

urlpatterns = [
    path('admin/', admin.site.urls),
    path('',views.home, name = 'home'),
    path('buy/movie<int:movie_id>/',views_venta.ventaEntrada, name = 'comprar'),
    path('about/',views_venta.about, name = 'about'),
    path('extra/',views_venta.extra, name = 'extra'),
    #re_path(r'^comprar/(?P<movie_id>\d+)/$',views_venta.ventaEntrada,name = 'comprar'),
]


if settings.DEBUG:
    from django.conf.urls.static import static
    urlpatterns += static(settings.MEDIA_URL, document_root = settings.MEDIA_ROOT)
