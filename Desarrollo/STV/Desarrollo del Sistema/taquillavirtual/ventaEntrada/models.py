from django.db import models

# Create your models here.

class Transaction(models.Model):
    movie = models.ForeignKey('core.Movie',on_delete = models.CASCADE,)
    customer_name = models.CharField(max_length = 100)
    date_movie = models.DateField()
    hour = models.CharField(max_length= 20,default = "**:**m - **:**m")
    lot = models.IntegerField(default = 0)
    amount = models.DecimalField(max_digits = 5, decimal_places = 2)

    class Meta:
        verbose_name = 'venta'
        verbose_name_plural = 'Ventas'
        ordering = ["date_movie"]
    def __str__(self):
        return "{}\t{}\t{}\t{}\t{}".format(self.date_movie,self.movie,self.lot,self.amount,self.customer_name)
