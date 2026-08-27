repo: abijahsimon/hao-cao-website
branch: main

## Last sync

date: 2026-08-27T20:19:25Z

### Updated in this project

- Read the real `research.html` (5 themes, each with curated links + publications behind a `<details>`) and rebuilt it as `Research v2.dc.html`.
- Imported the group photo, EPSS logo, and three research figures that the static pages never use.
- Corrected an earlier review finding: `header.jpg` (2.7 MB) is fully overridden by the subpage gradient rule and never downloads.
- Earlier turns: rebuilt Home, Team, and CV from `index.html`, the live roster, and the live CV.

## Screen map

| Project screen | Built from |
| --- | --- |
| `Home.dc.html` (faithful recreation) | `index.html`, `assets/css/main.css`, `assets/js/main.js` |
| `Home v2.dc.html` | as above + live CV and EPSS news for the Milestones section |
| `Research v2.dc.html` | `research.html`, `images/research-1.jpg`, `images/research-4.png` |
| `Team.dc.html` | `team.html` structure via `main.css`; roster from the live site |
| `CV.dc.html` / `CV Print.dc.html` | live CV page + `uploads/Hao Cao Biosketch.docx` |
| `Site Review.dc.html` | audit of `index.html`, `main.css`, `main.js` |

## Notes

- Not yet rebuilt: `publications.html` (44 KB), `teaching.html`, `opportunities.html`, `links.html`.
- `links.html` exists in the repo but appears in no page's nav.
- `images/research-2.png`, `images/research-5.png`, and `images/jupiter-interior-magnetosphere.jpg` are referenced only by `links.html` or not at all.
- `hao-cao-research-theme/` is a parallel WordPress theme carrying the same content as the static pages; changes need applying in both.
