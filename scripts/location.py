import requests

def localizare():

    res = requests.get('https://ipinfo.io/')
    data = res.json()

    city = data['city']
    country = data['country']

    print(data)
    location = data['loc'].split(',')
    latitude = location[0]
    longitude = location[1]
    print("Latitudine : ", latitude)
    print("Longitudine : ", longitude)

    # return city

localizare()
