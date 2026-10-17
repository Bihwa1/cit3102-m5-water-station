# 1.Project Information
Project title: cit3102-m5-water-station

Section: IT2E

Resource: Water station

Names:
- Lamando, Louie D.
- Buensuceso, Ramon Reouben R.

# 2.Screenshots
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


# 3.Setup steps
### API Testing with Bruno

This project uses [Bruno](https://www.usebruno.com/) to test API endpoints and inspect HTTP responses.

### 3.1 Start the Laravel Server

Make sure the project is running locally:

```bash
php artisan serve
```

The API base URL is:

```text
http://127.0.0.1:8000/api
```

### 3.2 View Available API Endpoints

To list the API routes registered in Laravel, run:

```bash
php artisan route:list --path=api
```

Use the listed HTTP methods and URI paths when creating requests in Bruno.

### 3.3 Open Bruno

1. Install and open [Bruno](https://www.usebruno.com/).
2. Open the existing Bruno collection if one is included in the repository. Otherwise, create a new collection for the project.
3. Create a request for the API endpoint you want to test.

### 3.4 Configure and Send a Request

For each request in Bruno:

- **HTTP Method:** Select the method defined by the Laravel route, such as `GET`, `POST`, `PUT`, `PATCH`, or `DELETE`.
- **URL:** Enter the endpoint using the local API base URL.

Example URL format:

```text
http://127.0.0.1:8000/api/<endpoint>
	or
http://127.0.0.1:8000/api/water-station
```

For requests that require input, configure the appropriate headers, query parameters, or JSON request body.

Click **Send** to execute the request, then inspect the HTTP status code and response body.

### 3.5 Verify the Response

Confirm that the API returns the expected data and HTTP status code. For endpoints that create, update, or delete records, verify that the database changes are correct.

**Note:** Keep the Laravel development server running while testing requests in Bruno.

# 4. Why does DELETE return 204 and not 200?:
Answer:

The purpose of the DELETE verb is to remove records or data within records. When something is removed using DELETe, nothing will remain; as in, nothing at all. Returning status code 204 with an empty body is a reply to the caller to signal that the deletion is complete and confirm that there is nothing there anymore.
