from django.db import models

# Create your models here.


"""
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
"""