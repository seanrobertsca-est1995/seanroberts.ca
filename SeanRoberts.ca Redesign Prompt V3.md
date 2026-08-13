# SeanRoberts.ca Redesign Prompt V3.md

## Project Objective

Redesign and modernize the **body content only** of four existing pages on **seanroberts.ca**, while preserving the website's existing and proven page framework.

The existing site-wide HTML structure, navigation, headers, hero system, footer, structural CSS, responsive framework, and other established components are considered **working production architecture and must not be redesigned or unnecessarily modified**.

The purpose of this project is specifically to redesign the content contained inside the identified body-content parent elements of four pages.

The finished result should provide:

- A more modern visual presentation.
- Stronger content hierarchy.
- Consistent typography, spacing, and component styling.
- Professionally rewritten SEO-oriented copy.
- Page-specific supporting imagery.
- Responsive layouts across desktop, tablet, and mobile.
- Accessible semantic markup.
- Consistency across all four pages without making the pages visually identical.
- Clean, maintainable vanilla HTML and CSS.
- A complete **drop-in deployment ZIP**, rather than incremental batches of changes.

---

# 1. Source Files

The hosting server is currently unavailable due to an external outage, so **do not depend on crawling the live website for this project**.

I will provide the website files directly for analysis.

Work from the uploaded source files and preserve the existing application/page framework.

The four pages to redesign are:

### Home Page — PHP & MySQL Coding

**File:**

`index.php`

**Editable parent container:**

```html
<section id="body-content"
         class="sr-rate-quote content-reveal"
         aria-labelledby="sr-rate-quote-title">
</section>
```

Only the content contained within this section is within the redesign scope.

---

### Intuitive Web Design

**File:**

`winnipeg-mb-web-design-and-development.php`

**Editable parent container:**

```html
<section id="body-content"
         class="sr-rate-quote content-reveal"
         aria-labelledby="sr-rate-quote-title">
</section>
```

Only the content contained within this section is within the redesign scope.

---

### Intelligent Web Apps

**File:**

`ai-powered-php-mysql-web-application-developer.php`

**Editable parent container:**

```html
<section id="body-content"
         class="sr-rate-quote content-reveal"
         aria-labelledby="sr-rate-quote-title">
</section>
```

Only the content contained within this section is within the redesign scope.

---

### Refer Business, Earn Cash!

**File:**

`current-website-dev-design-promotion.php`

**Editable parent container:**

```html
<div class="lp-resume promo-home-style">
</div>
```

Only the content contained within this container is within the redesign scope.

---

# 2. Hard Scope Restriction

This requirement is critical.

## Do not redesign or alter:

- Main site navigation.
- Header/navigation positioning.
- Hero/header layout.
- Existing hero-image implementation.
- Footer.
- Overall page-width system.
- Global page structure.
- Existing responsive navigation.
- Existing structural grid/layout system outside the identified body containers.
- Existing JavaScript.
- PHP application logic unrelated to the body content.
- Existing global CSS unless a modification is absolutely necessary for the new body components.
- Existing classes outside the target content simply for convenience.

The existing website framework has already been proven and should remain intact.

The redesign must be **contained and CSS-scoped to the four designated body-content areas**.

If adding a stylesheet reference is technically necessary, that should be treated as a minimal integration change rather than an invitation to alter the document header or existing site-wide CSS.

---

# 3. New HTML/CSS Naming Convention

Do not simply reuse the existing body-content component class names for the redesigned content.

Develop an **entirely new, systematic naming convention** based upon each page's subject.

The four pages should share a logical component vocabulary while maintaining page-specific namespaces.

For example, the naming architecture could conceptually follow:

- Home/PHP development namespace
- Web design namespace
- Web application namespace
- Referral promotion namespace

The exact names should be determined after inspecting the existing source code so that there are no naming collisions.

Requirements:

- Names must be descriptive.
- Names must be maintainable.
- Avoid generic classes such as `.box`, `.left`, `.blue`, or `.section1`.
- Avoid collisions with existing CSS.
- Page-specific selectors should remain clearly identifiable.
- Reusable component concepts may follow a consistent naming pattern.
- CSS selectors must remain scoped tightly enough that they cannot unintentionally change unrelated pages.

---

# 4. Visual Design Direction

The four pages should feel like members of the same website and design system while each retaining its own presentation and personality.

Create a clear content hierarchy covering:

- Primary body headings.
- Section headings.
- Subheadings.
- Introductory/lead text.
- Standard paragraph text.
- Feature statements.
- Lists.
- Calls to action.
- Image/text combinations.
- Supporting information.
- Any cards, panels, statistics, quotations, feature areas, or content emphasis treatments that improve comprehension.

Use consistent rules for:

- Heading scale.
- Font hierarchy.
- Margins.
- Padding.
- Section spacing.
- Line-height.
- Paragraph width.
- Vertical rhythm.
- Image spacing.
- Border treatment.
- Corner radius where appropriate.
- Alignment.
- Responsive stacking.

Avoid excessive decorative complexity.

The finished pages should feel modern, technically sophisticated, professional, and intentional rather than template-driven.

---

# 5. Existing Visual Identity to Preserve

The redesign must continue using the established visual language of seanroberts.ca.

Specifically retain and refine the use of:

### Dark Background Hierarchy

Maintain approximately **three to four distinguishable levels of black/dark backgrounds**.

These shades should cascade logically through nested components so that visual depth and section relationships remain apparent without relying heavily on borders.

For example:

- Main page/body background.
- Primary section surface.
- Nested content/card surface.
- Highlighted or inset surface.

Determine the exact existing colours from the supplied CSS rather than inventing an unrelated colour palette.

### Blue

Continue using the site's established blue for:

- Major headings.
- Important links or accents where appropriate.
- Existing blue checkmark treatment.

### Yellow

Continue using the established yellow treatment for:

- Feature headings.
- Important highlighted statements.
- Select calls to attention.

Do not overuse yellow.

### Body Text

Preserve the site's existing general text colour relationship against the dark backgrounds while improving hierarchy and readability where necessary.

### Checkmarks

Retain the existing **blue checkmark visual treatment** for appropriate benefit and feature lists.

---

# 6. Content and SEO Rewrite

Do not merely reformat the current copy.

Analyze the existing content to determine:

- Search intent.
- Primary service offering.
- Supporting services.
- User problems being solved.
- Competitive differentiators.
- Geographic relevance where applicable.
- Commercial intent.
- Expertise signals.
- Conversion opportunities.

Then conduct current web research into the content appearing for relevant high-value Google searches and analyze the characteristics of competitive ranking pages.

The objective is **not to copy competitors**.

Use the research to understand:

- Topics covered by strong ranking pages.
- Searcher questions being answered.
- Semantic concepts and terminology.
- Content depth.
- Commercial intent.
- Common deficiencies that seanroberts.ca can answer better.
- Opportunities for more precise or useful explanations.

Rewrite the page copy so it is:

- Original.
- Useful.
- Natural.
- Technically credible.
- Persuasive without sounding exaggerated.
- Search-intent aligned.
- Easy to scan.
- Appropriate for prospective business clients.
- Consistent with my actual services and experience.

Avoid:

- Keyword stuffing.
- SEO filler.
- Generic AI language.
- Unsupported claims.
- Repetitive phrasing.
- Excessive buzzwords.
- Artificially inserting Winnipeg into every heading or paragraph.
- Creating content simply to increase word count.

### Content Length

Keep the **overall amount of content on each page approximately comparable to its existing length**.

Individual sections may become shorter or longer where this improves the page.

Quality and usefulness are more important than maintaining identical word counts.

---

# 7. Positioning of My Services

The redesigned content should accurately communicate that my strongest emphasis is on:

- Advanced PHP development.
- MySQL/database development.
- Full-stack web application development.
- High-performance website programming.
- Scalable application architecture.
- Practical AI-assisted development where appropriate.
- Security-conscious engineering.
- Conversion-focused implementation.

Web design remains important, but should generally support the larger development objective rather than positioning me primarily as a graphic designer.

Where appropriate, communicate that design and development work together to produce an effective finished product.

---

# 8. Page-Specific Hero Context

The existing hero images and hero structure are **not to be redesigned**.

Use their concepts and colour palettes as creative direction for the new supporting body imagery and body-page presentation.

---

## Page 1 — Home Page / PHP & MySQL Coding

**File:** `index.php`

The existing hero depicts an open prairie valley at sunrise.

Its message emphasizes:

**High-Conversion Design and Scalable Full-Stack Development**

The prairie sunrise symbolizes renewal and possibility: efficient programming can revitalize an existing website or create entirely new capabilities.

The body content should complement this metaphor without overexplaining it.

Primary subject emphasis:

- PHP programming.
- MySQL.
- Full-stack development.
- Scalable solutions.
- Performance.
- Conversion-oriented development.
- Improving or extending existing websites.
- Practical engineering experience.

Supporting imagery should complement the warm prairie/sunrise palette.

---

## Page 2 — Intuitive Web Design

**File:** `winnipeg-mb-web-design-and-development.php`

The existing hero depicts a large blue whale just beneath the ocean surface with shimmering, slightly ethereal light entering the water from above.

Hero heading:

**Intuitive Web Design, Built to Scale.**

Hero supporting text:

> I design and develop intelligent, high-performance websites delivered on time and within budget. With clear, fixed pricing and zero hidden costs, you always know exactly what to expect.

The whale provides intentional visual irony: something physically massive can nevertheless move efficiently and gracefully.

That concept parallels development capable of handling substantial information or functionality while remaining efficient for users.

Primary subject emphasis:

- Professional website design and development.
- Intuitive interfaces.
- High performance.
- Scalability.
- Clear project expectations.
- Transparent pricing.
- Development quality.
- Business usability.
- Design implemented through strong programming.

Supporting imagery should complement the deep blue/aquatic/illuminated palette.

---

## Page 3 — Intelligent Web Apps

**File:** `ai-powered-php-mysql-web-application-developer.php`

The existing hero depicts mountains at sunset reflected in a body of water.

Hero heading:

**Next-Gen Web Apps, Built to Convert.**

Hero supporting text:

> Combine advanced AI efficiency with rock-solid engineering. Get secure, high-performance websites optimized for rapid launch and real business growth.

The visual concept should reinforce a combination of:

- Modern AI-assisted efficiency.
- Approximately three decades of practical development experience.
- Stable engineering.
- Security.
- Performance.
- Scalable PHP/MySQL applications.
- Business growth.
- Rapid but disciplined implementation.

Do not position AI as a replacement for engineering expertise.

Instead, position it as a development accelerator used alongside substantial practical experience, validation, testing, and secure coding practices.

Supporting imagery should complement the mountain/sunset/reflection palette.

---

## Page 4 — Refer Business, Earn Cash!

**File:** `current-website-dev-design-promotion.php`

The existing hero depicts adults and children enjoying a sunny beach and shallow water.

Hero heading:

**Refer Business, Earn Cash!**

Hero supporting text:

> Know someone—a friend, colleague, or client—who needs a new website or a professional redesign? Send them my way—or submit your own project and earn $100.

The visual idea is simplicity: earning the referral reward should feel almost as effortless as enjoying a day at the beach.

The body content should make the referral program:

- Extremely easy to understand.
- Credible.
- Friendly.
- Transparent.
- Easy to act upon.

Clearly explain:

- Eligibility.
- Referral process.
- Qualification requirements.
- Payment.
- Any applicable offer deadline.
- Self-referral/project eligibility if still applicable.
- Any additional commission opportunity currently offered.

Do not introduce terms that are not supported by the existing offer.

Supporting imagery should complement the beach/sun/water palette.

---

# 9. Body Content Images

Each redesigned page should contain approximately **two to three new supporting images** integrated naturally into its body content.

Across four pages, this will generally result in approximately **8–12 supporting images**.

The images must:

- Relate directly to the section where they appear.
- Complement rather than duplicate the hero image.
- Follow the general colour atmosphere of that page's hero.
- Support the subject being discussed.
- Avoid generic corporate-stock imagery wherever possible.
- Avoid visual clutter.
- Work naturally with the dark seanroberts.ca design.

When image-generation capability is available, create suitable original images.

If image creation cannot be completed during implementation:

1. Still create the complete HTML markup.
2. Still create all applicable CSS.
3. Use clearly identifiable placeholder image paths.
4. Specify what each image should depict.
5. Include proper width/height considerations.
6. Include descriptive alt text.
7. Make replacement straightforward without requiring markup changes.

Use sensible filenames based upon page subject and image purpose.

---

# 10. Image Implementation

Images must be implemented responsively.

Where appropriate:

- Use semantic `<figure>` and `<figcaption>` elements.
- Supply meaningful `alt` text for informative images.
- Use empty `alt=""` only when an image is genuinely decorative.
- Include intrinsic dimensions where possible to reduce cumulative layout shift.
- Prevent image distortion.
- Preserve aspect ratio.
- Prevent horizontal overflow.
- Scale cleanly on mobile devices.
- Consider native lazy loading for non-critical body imagery.
- Do not lazy-load the existing page hero simply as part of this project.

Use CSS rather than JavaScript for responsive image presentation.

---

# 11. Responsive Design

Use **vanilla CSS3 only** for the redesigned body components.

Do not introduce JavaScript to accomplish body layout or presentation.

The redesign should function correctly across representative modern viewport categories, including:

- Large desktop displays.
- Standard desktop/laptop displays.
- Tablet landscape.
- Tablet portrait.
- Large phones.
- Standard phones.
- Narrow mobile screens.

Do not design for one specific device width only.

Use fluid sizing and responsive behaviour where appropriate, including techniques such as:

- `max-width`
- percentages
- CSS Grid
- Flexbox
- `clamp()`
- responsive gaps
- sensible media queries
- intrinsic image sizing

Avoid excessive breakpoint-specific patches.

The design should degrade gracefully between defined breakpoints.

---

# 12. Accessibility

Apply semantic HTML and appropriate accessibility practices throughout the redesigned body content.

Requirements include, where applicable:

- Logical heading hierarchy.
- Correct landmark/section structure.
- Valid heading relationships.
- Descriptive links.
- Meaningful image alternatives.
- Sufficient colour contrast.
- Keyboard-compatible interactive elements.
- No information conveyed by colour alone.
- Accessible list semantics.
- Appropriate ARIA relationships where native HTML semantics are insufficient.

Do **not** add ARIA attributes where native semantic HTML already communicates the information correctly.

ARIA should supplement HTML semantics, not replace them.

---

# 13. Technical Requirements

The implementation must:

- Use the existing PHP files.
- Preserve existing PHP logic unless it directly exists inside the body content being replaced and must be retained.
- Use valid semantic HTML5.
- Use vanilla CSS3.
- Use no additional JavaScript.
- Introduce no CSS or JS frameworks.
- Introduce no external UI libraries.
- Avoid inline CSS unless technically necessary.
- Avoid unnecessary `!important`.
- Avoid duplicated CSS.
- Avoid selectors likely to leak into existing site components.
- Preserve existing responsive/site behaviour outside the redesigned body.
- Preserve existing links and functionality unless a link itself is intentionally updated as part of the rewritten body content.
- Preserve any relevant server-side functionality embedded within the target content.

---

# 14. Existing Code Analysis Before Editing

Before modifying files, inspect the supplied source carefully.

Determine:

1. Which CSS files currently affect each body section.
2. Existing colour variables or literal colour values.
3. Existing font stack.
4. Existing spacing conventions.
5. Existing breakpoints.
6. Existing reusable accessibility patterns.
7. Existing checkmark implementation.
8. Existing responsive image conventions.
9. Existing PHP includes or server-side logic within the target body sections.
10. Any classes reused elsewhere that must not be modified globally.

Reuse established site design values when appropriate while keeping the new V3 body components independently scoped.

---

# 15. SEO Research Before Copywriting

Before rewriting each page, research current search results relevant to its primary topic.

Suggested intent areas include, but are not limited to:

### Home

- PHP developer Winnipeg
- PHP web developer
- MySQL developer
- PHP website development
- custom PHP development
- full-stack web developer Winnipeg

### Intuitive Web Design

- Winnipeg web design
- Winnipeg web development
- web designer Winnipeg
- website development Winnipeg
- custom website design Winnipeg

### Intelligent Web Apps

- PHP web application developer
- custom web application development
- AI web application development
- PHP MySQL application developer
- custom business web applications

### Referral Page

SEO is secondary to conversion clarity on this page.

Research may still be used where useful, but do not compromise the simplicity of the referral offer simply to target search terms.

The final copy should reflect useful competitive research without imitating or closely paraphrasing another website.

---

# 16. Calls to Action

Review the purpose of each page and create a clear CTA hierarchy.

CTAs should feel consistent across the site but should not necessarily use identical wording.

Prioritize actions such as:

- Discussing a project.
- Requesting information.
- Contacting me.
- Exploring relevant development services.
- Making a referral.

Avoid excessive repeated CTA buttons after every section.

---

# 17. Quality Assurance

Before packaging the final files, perform a complete review.

Verify:

### Scope

- No unintended header changes.
- No unintended navigation changes.
- No unintended hero changes.
- No unintended footer changes.
- No unrelated page-structure changes.

### HTML

- Valid hierarchy.
- No duplicate IDs introduced.
- Links preserved or intentionally changed.
- PHP preserved.
- Accessibility attributes are valid.

### CSS

- No obvious selector leakage.
- No unnecessary duplication.
- No obsolete declarations.
- No reliance on JavaScript.
- Responsive behaviour is coherent.
- Existing site layout remains unaffected.

### Responsive Layout

Review the redesigned body pages at representative widths such as:

- ~1440px desktop
- ~1280px desktop
- ~1024px tablet landscape
- ~768px tablet portrait
- ~430px mobile
- ~390px mobile
- ~360px narrow mobile

Exact breakpoint selection should ultimately follow the site's existing CSS architecture rather than blindly creating these exact breakpoints.

Check specifically for:

- Horizontal overflow.
- Text collisions.
- Poor image cropping.
- Excessive whitespace.
- Insufficient spacing.
- Awkward heading wrapping.
- Unreadably long text lines.
- Inconsistent card heights where relevant.
- Image aspect-ratio problems.

---

# 18. Final Deliverable

Do **not** deliver this project incrementally in page-by-page batches unless an unavoidable technical problem prevents complete delivery.

The primary deliverable should be one complete **drop-in ZIP archive** containing all files necessary for the redesign.

The package should include:

- Updated `index.php`
- Updated `winnipeg-mb-web-design-and-development.php`
- Updated `ai-powered-php-mysql-web-application-developer.php`
- Updated `current-website-dev-design-promotion.php`
- Required CSS file(s)
- New supporting body images, if generated
- Any required asset directories
- A concise implementation/change log in Markdown
- Any image-generation/replacement notes if placeholders remain

Preserve the site's expected directory structure so that the package can be deployed with minimal ambiguity.

Do not include unrelated website files unless they are required for the implementation.

---

# 19. Final Report

Along with the ZIP archive, provide a concise report covering:

### Changes Made

Summarize the major design, content, SEO, accessibility, and responsive improvements.

### Files Changed

Identify each changed or newly created file.

### Existing Architecture Preserved

Explicitly confirm whether:

- Header remained unchanged.
- Navigation remained unchanged.
- Hero structure remained unchanged.
- Footer remained unchanged.
- Global structural layout remained unchanged.

### SEO

Summarize the primary search intent and content strategy used for each page.

### Images

Identify:

- Images generated.
- Their intended purpose.
- Any placeholders still requiring replacement.

### Testing

Summarize responsive and code-level checks completed.

### Exceptions

Clearly identify anything that could not be completed or anything that required a change outside the originally designated body-content scope.

Do not conceal compromises or unresolved issues.

---

# 20. Governing Principle

The goal of **SeanRoberts.ca Redesign V3** is not to rebuild seanroberts.ca.

It is to preserve the site's proven structural foundation while replacing the body content of these four pages with a cohesive, contemporary, conversion-focused and SEO-conscious content system.

The finished implementation should look as though these four body pages were deliberately designed together as the next generation of the existing seanroberts.ca website—not as four unrelated templates and not as a wholesale redesign of the website.