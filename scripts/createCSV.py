# Atributele necesare: lon, lat, data, description, temp, pressure, humidity, temp_min, temp_max

import csv
import requests
from random import randint

# Datele din csv vor fi adaugate cu ajutorul unui api
def takeData(lat,lon):
    link ='https://fcc-weather-api.glitch.me/api/current?lat='+lat+'&lon='+lon
    res = requests.get(link)
    data = res.json()

    # lon = data['coord']['lon']
    # lat = data['coord']['lat']
    description = data['weather'][0]['description']
    temp = data['main']['temp']
    pressure = data['main']['pressure']
    humidity = data['main']['humidity']
    temp_min = data['main']['temp_min']
    temp_max = data['main']['temp_max']

    return description,temp,pressure,humidity,temp_min,temp_max

with open(r'dataset.csv', 'a', newline='') as fp:
    i=1000
    while i>0:
        lon_n = randint(10,99)
        lon_z = randint(10,99)
        lon = str(lon_n) + '.' + str(lon_z)
        lat_n = randint(10,99)
        lat_z = randint(10,99)
        lat = str(lat_n) + '.' + str(lat_z)
        description,temp,pressure,humidity,temp_min,temp_max = takeData(lat,lon)
        data = [lon,lat, '22-06-2019', description,temp,pressure,humidity,temp_min,temp_max]
            # Adaugarea primului rand cu atribute
            # data =[['lon','lat','data', 'description','temp','pressure','humidity','temp_min','temp_max'],
            #          [lon,lat, '21-06-2019', description,temp,pressure,humidity,temp_min,temp_max]
            #      ]

        a = csv.writer(fp, delimiter=',')
        a.writerow(data)
        i = i-1