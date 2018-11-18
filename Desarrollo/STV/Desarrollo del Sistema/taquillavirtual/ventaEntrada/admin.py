from django.contrib import admin
from .models import Transaction
# Register your models here.

class TransactionAdmin(admin.ModelAdmin):
    readonly_fields = ('movie','customer_name','date_movie','lot','amount','hour')

admin.site.register(Transaction, TransactionAdmin)