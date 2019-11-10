# NumberToTurkishLira - PHP

### Sayıyı Türk Lirası Olarak Yazıya Çevirme - PHP

**2012 yılında ASP ile hazırladığım sayıyı Türk Lirası olarak yazıya çevirme fonksiyonunu PHP'ye çevirip paylaşmak istedim.**


```
echo NumberToTurkishLira( -0.50 );
- Eksi Elli Kuruş
```
```
echo NumberToTurkishLira( -13.11 );
- Eksi On Üç Lira, On Bir Kuruş
```

```
echo NumberToTurkishLira( 9.90 );
- Dokuz Lira, Doksan Kuruş
```

```
echo NumberToTurkishLira( 12.12 );

- On İki Lira, On İki Kuruş
```

```
echo NumberToTurkishLira( 500 );

- Beş Yüz Lira
```

```
echo NumberToTurkishLira( 1000 );

- Bin Lira
```

```
echo NumberToTurkishLira( 1453 );

- Bin Dört Yüz Elli Üç Lira
```

```
echo NumberToTurkishLira( 1923 );

- Bin Dokuz Yüz Yirmi Üç Lira
```

```
echo NumberToTurkishLira( 59421.45 );

- Elli Dokuz Bin Dört Yüz Yirmi Bir Lira, Kırk Beş Kuruş
```

```
echo NumberToTurkishLira( 9458761 );

- Dokuz Milyon Dört Yüz Elli Sekiz Bin Yedi Yüz Altmış Bir Lira
```

```
echo NumberToTurkishLira( 7343457483664.82 );

- Yedi Trilyon Üç Yüz Kırk Üç Milyar Dört Yüz Elli Yedi Milyon Dört Yüz Seksen Üç Bin Altı Yüz Altmış Dört Lira, Seksen İki Kuruş
```

```
echo NumberToTurkishLira( 95001125453345.80 );

- Doksan Beş Trilyon Bir Milyar Yüz Yirmi Beş Milyon Dört Yüz Elli Üç Bin Üç Yüz Kırk Beş Lira, Seksen Kuruş
```
