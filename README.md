This is a repo that I created to demonstrate an issue in Filament. To reproduce the issue do the following:

1. Clone/get the repo and pull the code down
2. Be sure to generate your app key and migrate the database
3. Create a filament user so you can login
4. Using tinker and `Copy::factory()`, create 15 copies
5. Login to the app and go to the copy resource
6. Click on the Purchased tab
7. Click on the post button on a row that is at the bottom of the table
8. Notice that a different row gets updated

FYI, I know why this is happening, I just don't know the solution. The issue is in the query when it is getting the
record to pass it into the action. The query is:

```sql
select * from "copies" where "status" = 'purchased' or "status" = 'available' and "id" = '14' LIMIT 1
```
So because of the `or` in the query, it will just get the first one with a purchased status instead of the one with the
correct id.
