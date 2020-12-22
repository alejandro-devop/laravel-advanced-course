# Flash messages
Use `back()` to return to the previous url
use the method `with` to add flash messages after a redirect or a `back` call
```
return redirect()->with('status', 'Recibimos tu mensaje, te responderemos...');
```