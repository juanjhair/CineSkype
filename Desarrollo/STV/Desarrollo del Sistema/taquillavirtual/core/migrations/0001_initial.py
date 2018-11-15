# Generated by Django 2.1.2 on 2018-11-15 13:58

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Movie',
            fields=[
                ('id', models.AutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('tittle', models.CharField(max_length=100, verbose_name='Título')),
                ('description', models.CharField(max_length=250, verbose_name='Descripción')),
                ('image', models.ImageField(upload_to='Movies', verbose_name='Poster')),
                ('trailer', models.URLField(verbose_name='Enlace de trailer')),
                ('created', models.DateTimeField(auto_now_add=True, verbose_name='Fecha de creación')),
                ('updated', models.DateTimeField(auto_now=True, verbose_name='Fecha de modificación')),
            ],
            options={
                'verbose_name': 'Película',
                'verbose_name_plural': 'Películas',
                'ordering': ['-created'],
            },
        ),
    ]
