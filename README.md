# AcademyPortal API

### Routes

**/api/quote**

GET
- random quote
- returns quote object:
    -- `{'success':true, 'msg':'quote successfully retrieved', 'data':[character, quote]}`

**/api/quote/{id}**
 - returns quote as selected by id
    -- `{'success':true, 'msg':'quote successfully retrieved', 'data':[character, quote]}`