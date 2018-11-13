from django.db import models

# Create your models here.

class Movie(models.Model):
    tittle = models.CharField(max_length = 200, verbose_name = 'Título')
    description = models.CharField(verbose_name = 'Descripción')
    image = models.ImageField(verbose_name = 'Poster', upload_to = 'ventaEntrada')
    trailer = models.URLField(verbose_name = 'Enlace de trailer')
    created = models.DateTimeField(auto_now_add=True,verbose_name="Fecha de creación")
    updated = models.DateTimeField(auto_now=True,verbose_name="Fecha de modificación")

    class Meta:
        verbose_name = 'Película'
        verbose_name_plural = 'Películas'
        ordering = ["-created"]
    
    def __str__(self):
        return self.tittle

class Customer(models.Model):
    name = models.CharField(max_length = 200, verbose_name = 'Nombres')
    lastname = models.CharField(max_length = 200, verbose_name = 'Apellidos')
    email = models.EmailField(max_length = 254, verbose_name = 'Correo')
    
    class Meta:
        verbose_name = 'Cliente'
        verbose_name_plural = 'Clientes'
        ordering = ["lastname"]
    
    def __str__(self):
        return self.lastname + ", " + self.name

class Transaction(models.Model):
    movie = models.Foreign
    customer = models.
    seat = models.CharField()
