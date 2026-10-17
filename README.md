# cit3102-m5-water-station
Project title: cit3102-m5-water-station

Section: IT2E

Resource: Water station

Names:
Lamando, Louie D.
Buensuceso, Ramon Reouben R.

1. POST /api/register with a new user
![alt text](<Screenshot 2026-10-17 192239.png>)

2. POST /api/login with that user
![alt text](<Screenshot 2026-10-17 192543.png>)

3. 	GET /api/water-stations with no token
![alt text](<Screenshot 2026-10-17 192818.png>)

4.	GET /api/water-stations with the token
![alt text](<Screenshot 2026-10-17 193235.png>)

5. 	POST /api/water-stations with valid data
![alt text](<Screenshot 2026-10-17 193324.png>)

6.	POST /api/water-stations with a required field missing
![alt text](<Screenshot 2026-10-17 193430.png>)


7. GET /api/water-stations/5
![alt text](<Screenshot 2026-10-17 193514.png>)

8. GET /api/water-stations/99999
![alt text](<Screenshot 2026-10-17 193611.png>)

9. PUT /api/water-stations/11 with changed data
![alt text](<Screenshot 2026-10-17 193658.png>)

10. DELETE /api/water-stations/7
![alt text](<Screenshot 2026-10-17 193742.png>)


Why does DELETE return 204 and not 200?:
Answer:

The purpose of the DELETE verb is to remove records or data within records. When something is removed using DELETe, nothing will remain; as in, nothing at all. Returning status code 204 with an empty body is a reply to the caller to signal that the deletion is complete and confirm that there is nothing there anymore.
