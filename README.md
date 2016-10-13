# Tel Modifier

**Convert formatted phone numbers into a valid href "tel" string.**

This modifier will convert a nicely formatted phone number into a numbers-only string, allowing usage inside an `href`.

It will convert any `+` symbols into `00` (for international numbers), remove `(0)` if it exists, and then remove all remaining non-numerical characters.


## Usage

**Setup:**

Simply copy the `Tel` folder into `site/addons/`.

**Simple Example:**

```
// Saved data
company_phone: 123-456-789

// Usage inside template
{{ company_phone | tel }}

// Output
123456789
```

**Real Life Example:**

```
// Saved data
company_phone: +31 (0) 612 345 678

// Usage inside template
<p>Call Us: <a href="tel:{{ company_phone | tel }}">{{ company_phone }}</a></p>

// Output
<p>Call Us: <a href="tel:0031612345678">+31 (0) 612 345 678</a></p>
```