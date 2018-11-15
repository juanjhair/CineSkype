from django.db import models

# Create your models here.

class Movie(models.Model):
    tittle = models.CharField(max_length = 100, verbose_name = 'Título')
    description = models.CharField(max_length = 250, verbose_name = 'Descripción')
    image = models.ImageField(verbose_name = 'Poster', upload_to = 'Movies')
    trailer = models.URLField(verbose_name = 'Enlace de trailer')
    created = models.DateTimeField(auto_now_add=True,verbose_name="Fecha de creación")
    updated = models.DateTimeField(auto_now=True,verbose_name="Fecha de modificación")

    class Meta:
        verbose_name = 'Película'
        verbose_name_plural = 'Películas'
        ordering = ["-created"]
    
    def __str__(self):
        return self.tittle
