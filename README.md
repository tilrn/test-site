Domača stran za vse Etra spletne aplikacije z uptime monitoring sistemom.

**Live URL:** https://home.etra.kolektor.com/

## Features

- **Angular 12 Frontend** - Responzivna nadzorna plošča s povezavami do internih projektov
- **Django REST API Backend** - Python backend za spremljanje dostopnosti
- **Uptime Monitoring** - Periodično preverjanje zdravja vseh registriranih spletnih strani
- **Status Panel** - Prikaz statusa v realnem času (up/down)
- **SQLite Database** - Lahka baza za shranjevanje rezultatov preverjanja

## Project Structure

-etra-intranet-homepage/

- -backend/ # Django backend
- - - etra_backend/ # Django projektne nastavitve
- - - uptime/ # Aplikacija za spremljanje dostopnosti
- - - manage.py
- - src/ # Angular izvorna koda
- - dist/ # Angular build
- - Dockerfile
- - README.md

## Requirements

- Python 3.8+
- Node.js 14+
- Docker (opcijsko)

## Running the Application

### Development

```bash
# Frontend
npm run start

# Backend
cd backend
python manage.py runserver

Docker

docker build -t etra-intranet .
docker run -p 8000:8000 etra-intranet

Odpri http://localhost:8000

Adding a New Site (Frontend)

V /src/app/data.ts dodaj spletno stran:

{
  url: "polni-url-do-strani",
  img: "/assets/img/ime-slike.png",
  icon: "webpage-icon",
  header: "Ime naslova",
  description: "Opis"
}

Slika v /assets/img/ naj bo istih dimenzij kot ostale.

Za novo ikono shrani .svg datoteko v /src/assets/icons/, nato dodaj v /src/app/app.component.ts constructor:

this.matIconRegistry.addSvgIcon("webpage-icon", this.domSanitizer.bypassSecurityTrustResourceUrl("/assets/icons/webpage.svg"));

Adding a Site to Monitor (Backend)

cd backend
python manage.py shell

from uptime.models import Site
Site.objects.create(name="Ime strani", url="https://example.com/")
exit()

Zaženi preverjanje dostopnosti:

python manage.py check_sites

API Endpoints

| Method | Endpoint                        | Opis                           |
|--------|---------------------------------|--------------------------------|
| GET    | /api/uptime/sites/              | Seznam vseh spremljanih strani |
| GET    | /api/uptime/sites/{id}/         | Podrobnosti posamezne strani   |
| GET    | /api/uptime/sites/{id}/history/ | Zgodovina preverjanj           |
| GET    | /api/uptime/status/             | Hiter pregled statusov         |

Deployment

1. Posodobi verzijo v package.json
2. Poženi build_and_push.ps1
3. Posodobi verzijo v k8s-etra-intranet-homepage.yml
4. Poženi kubectl apply -f k8s-etra-intranet-homepage.yml

Periodic Uptime Checks

Dodaj v crontab za preverjanje vsakih 5 minut:

*/5 * * * * cd /path/to/backend && python manage.py check_sites

Technologies

- Frontend: Angular 12, Angular Material
- Backend: Django 6.0, Django REST Framework
- Database: SQLite
- Containerization: Docker, Kubernetes

Changelog

- 1.0.4 - Dodan Django backend z uptime monitoring sistemom, status panel komponenta
- 1.0.3 - Urejen readme, dodan SharePoint, spremenjene slike
```
