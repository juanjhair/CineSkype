from django.db import models

# Create your models here.

class Movie(models.Model):

    tittle = models.CharField(max_length = 100, verbose_name = 'Título')
    description = models.CharField(max_length = 250, verbose_name = 'Descripción')
    image = models.ImageField(verbose_name = 'Poster', upload_to = 'Movies')
    trailer = models.URLField(verbose_name = 'Enlace de trailer')
    cost = models.DecimalField(verbose_name = 'Precio de Entrada', max_digits=5, decimal_places=2, default = 0.00)
    hours = models.CharField(verbose_name= 'Intervalos de hora (Separe con comas , )', max_length = 40, default = '00:00 m - 00:00 m')
    created = models.DateTimeField(auto_now_add=True,verbose_name="Fecha de creación")
    updated = models.DateTimeField(auto_now=True,verbose_name="Fecha de modificación")

    class Meta:
        verbose_name = 'Película'
        verbose_name_plural = 'Películas'
        ordering = ["-created"]
    
    def __str__(self):
        return self.tittle
    
    def embedTrailer(self):
        return self.trailer[-11:] 

    def getInterval(self):
        return self.hours.split(',')















"""
    h1 = '13:00 pm - 15:30 pm'
    h2 = '14:00 pm - 15:45 pm'
    h3 = '16:00 pm - 18:30 pm'
    h4 = '19:00 pm - 21:00 pm'
    
    hours_interval = [
                        
                        ('1',h1),
                        ('2',h2),
                        ('3',h3),
                        ('4',h4),
                    ]
"""