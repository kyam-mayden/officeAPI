# AcademyPortal API

### Routes

**/api/quote**

GET
- random quote
- returns quote object:
    -- `{'success':true, 'msg':'quote successfully retrieved', 'data':[character, quote]}`

**/api/quote/{id}**
GET
 - returns quote as selected by id
    -- `{'success':true, 'msg':'quote successfully retrieved', 'data':[character, quote]}`

**/api/characer/{character}**
GET
 - returns all quotes by given character
    -- `{'success':true, 'msg':'quotes successfully retrieved', 'data':[character, [quotes]}`