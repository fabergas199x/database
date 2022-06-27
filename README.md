### Setup environment
1. Install [Redis](https://redis.io/docs/getting-started/installation/)
2. Install [Python](https://www.python.org/downloads/) (required python 3.x)
3. Install [Mongodb](https://www.mongodb.com/docs/manual/installation/)
4. Install requirement package
  ```sh
    pip install pip requirements.txt
  ```
5. Set up database
  ```sh
    python database/set_up.py
  ```

### How to run
- Start server on the local:
  ```
    python core_dev.py
  ```
- You can test APIs using `curl`:
  - First, you should create a user 
```cosole
curl -d "{\"username\":\"user\",\"password\":\"test\"}" -H "Content-Type: application/json" -X POST "http://localhost:5000/auth/signup"
```
  - Login user
```cosole
curl -d "{\"username\":\"user\",\"password\":\"test\"}" -H "Content-Type: application/json" -X POST "http://localhost:5000/auth/signin"
```
  - After logined, you will get a token as below
```json
{
    "data": {
        "bearer_token": "Bearer: eyJ0eXAiOiJKV1..."
    },
    "message": ""
}
```
   -  You have to add token for authentication when call API do task
```cosole
curl -H "Content-Type: application/json" -H "accept: */*" -H "Authorization: Bearer: eyJ0eXAiOiJKV1..." -X POST "http://localhost:5000/task"
```
- Run the testcases:
```cosole
npm run test
```
Actually, TDD is a new style for me. It gives me very interesting experiences, gives me more perspectives. TTD helps me feel more confident when coding.

For this project. I feel it still lacks some things. For example, there should be logging, paging. Also need Docker for ci/cd, Swagger for document apis easier to understand.

Thank for your spending time to review my project. Hopefully, we will have a face to face meeting to discuss more details about this project , or any in-depth information.
