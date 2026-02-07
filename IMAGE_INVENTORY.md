# Image Inventory & Configuration

## Overview

All images used throughout the website are now **centralized in `config.php`** with:
- ✅ Image dimensions documented
- ✅ Purpose/usage documented
- ✅ All Pixabay URLs (reliable CDN)
- ✅ Verified accessible and displaying

## Image Configuration List

### Total Images: 20
**Source**: Pixabay (free, reliable, no attribution required)

---

## 1. Hero Section Images (Full-Width Backgrounds)

| Key | Dimensions | Description | Usage |
|-----|------------|-------------|-------|
| `hero_home` | 1280x960px | Solar panels in sunlight | Homepage hero slider slide 1 |
| `solar_farm` | 1280x854px | Large solar farm | Service pages hero background |
| `battery_storage` | 1280x854px | Battery storage units | Service pages hero background |
| `ev_charging` | 1280x854px | Electric vehicle charging | Service pages hero background |
| `hydrogen_tech` | 1280x940px | Hydrogen technology lab | Service pages hero background |
| `wind_turbines` | 1280x897px | Wind turbines in field | Service pages hero background |
| `smart_grid` | 1280x781px | Smart grid network visualization | Service pages hero background |
| `industrial_solar` | 1280x853px | Solar installation on building | Service pages hero background |

---

## 2. About Page Images

| Key | Dimensions | Description | Usage |
|-----|------------|-------------|-------|
| `about_ceo` | 1280x1280px | Professional portrait (square) | CEO profile photo (circular crop: 280x280px) |
| `team_office` | 1280x853px | Modern office workspace | Team/office section image |

---

## 3. Service Page Images

| Key | Dimensions | Description | Usage |
|-----|------------|-------------|-------|
| `installation` | 1280x854px | Solar panel installation work | Service pages - installation section |
| `maintenance` | 1280x853px | Technician performing maintenance | Service pages - maintenance section |
| `wind_energy` | 1280x960px | Wind farm/turbine field | Wind energy service section |
| `energy_management` | 1280x853px | Power grid/energy distribution | Energy management service section |

---

## 4. Service Detail Page Images (Alternating Layouts)

| Key | Dimensions | Description | Usage |
|-----|------------|-------------|-------|
| `solar_monitoring` | 1280x853px | Solar monitoring dashboard | Solar systems service page |
| `battery_tech` | 1280x848px | Advanced battery technology | Energy storage service page |
| `ev_network` | 1280x865px | EV charging network | EV infrastructure service page |
| `hydrogen_apps` | 1280x912px | Hydrogen laboratory equipment | Hydrogen technology service page |

---

## 5. Homepage Project Cards

| Key | Dimensions | Description | Usage |
|-----|------------|-------------|-------|
| `project_solar` | 1280x853px | Solar power project showcase | Homepage featured projects |
| `project_battery` | 1280x853px | Battery storage project showcase | Homepage featured projects |

---

## Image Usage by Page

### Homepage (`index.php`)
- Hero slider: `hero_home`, `solar_farm`, `ev_charging`
- Service cards: From `$services` array in config
- Featured projects: `project_solar`, `project_battery`
- Additional services: From `$additional_services` array

### Services (`services.php`)
- Hero background: `battery_storage`
- Service cards: From `$services` array
- Additional services: From `$additional_services` array

### Service Detail Pages
- **Solar Systems** (`service-solar-systems.php`):
  - Hero: `solar_farm`
  - Detail image: `solar_monitoring`

- **Energy Storage** (`service-energy-storage.php`):
  - Hero: `battery_storage`
  - Detail image: `battery_tech`

- **EV Infrastructure** (`service-ev-infrastructure.php`):
  - Hero: `ev_charging`
  - Detail image: `ev_network`

- **Hydrogen Technology** (`service-hydrogen-technology.php`):
  - Hero: `hydrogen_tech`
  - Detail image: `hydrogen_apps`

### About (`about.php`)
- Hero: `team_office`
- CEO profile: `about_ceo` (280x280px circular crop)
- Team office: `team_office`

### Contact (`contact.php`)
- Hero: `maintenance`

---

## Image Dimensions Guide

### Standard Sizes Used

| Purpose | Size | Notes |
|---------|------|-------|
| Hero Slider | 1280x960px | Full-width backgrounds, aspect ratio 4:3 |
| Hero Background | 1280x853px | Full-width page headers, aspect ratio ~3:2 |
| Card Images | 1280x854px | Service/project cards, fills container |
| CEO Portrait | 1280x1280px | Square, cropped to 280x280px circle |
| Team Photo | 1280x853px | Wide photo, full-width responsive |

### Responsive Behavior

All images use:
- `background-size: cover` for hero sections
- `background-position: center` for proper centering
- `object-fit: cover` for card images
- `max-width: 100%` for responsive scaling
- Automatic scaling on mobile (no fixed widths)

---

## Image Sources & Verification

### Pixabay - All Images
- **Domain**: cdn.pixabay.com
- **License**: Free for personal and commercial use
- **Attribution**: Not required (but appreciated)
- **Reliability**: ✅ Very high uptime
- **Speed**: ✅ Optimized CDN delivery

### Example Image URL Format
```
https://cdn.pixabay.com/photo/[YEAR]/[MONTH]/[DAY]/[ID]/[DESCRIPTION]_1280.jpg
```

### Why Pixabay?
✅ Free and reliable
✅ High-quality images
✅ Commercial use allowed
✅ No attribution required
✅ CDN delivery (fast)
✅ Consistent availability

---

## Configuration Example

All images are accessed in PHP files like this:

```php
<?php echo isset($images['solar_farm']) ? $images['solar_farm'] : ''; ?>
```

Or in inline styles:
```php
style="background-image: url('<?php echo $images['hero_home']; ?>');"
```

---

## File Location

**Config File**: `/Applications/XAMPP/xamppfiles/htdocs/oil2/config.php`
**Lines**: 36-68

```php
$images = [
    'hero_home' => 'https://cdn.pixabay.com/photo/2017/08/01/11/48/solar-panel-2562371_1280.jpg', // 1280x960px
    // ... more images
];
```

---

## Accessing Images in PHP

### In PHP Files
```php
<?php
// Direct access (safe with isset check)
echo isset($images['solar_farm']) ? $images['solar_farm'] : '';

// In loops (service arrays have image URLs)
foreach ($services as $service) {
    echo $service['image']; // Pre-configured with image from $images
}
?>
```

### In HTML Styles
```html
<!-- Background images -->
<div style="background-image: url('<?php echo $images['hero_home']; ?>');">

<!-- IMG tags -->
<img src="<?php echo $images['solar_farm']; ?>" alt="Solar Farm">
```

---

## Adding New Images

To add a new image to the website:

1. **Find image on Pixabay**: https://pixabay.com/
2. **Copy the CDN link**: `https://cdn.pixabay.com/photo/...`
3. **Add to config.php** `$images` array:
   ```php
   'your_key' => 'https://cdn.pixabay.com/photo/...', // WIDTHxHEIGHTpx - Description
   ```
4. **Use in PHP**: `<?php echo $images['your_key']; ?>`

---

## Verification Checklist

✅ All 20 images are centralized in config.php
✅ All dimensions documented in comments
✅ All purposes/usages documented
✅ All images from Pixabay CDN (reliable)
✅ No hardcoded Unsplash URLs (replaced with Pixabay)
✅ All images verified accessible
✅ Image paths consistent across website

---

## Summary

**Before**: Images scattered across multiple files with hardcoded URLs
**After**: All images centralized in config.php with clear documentation

**Benefits**:
- 🎯 Single source of truth for all image URLs
- 📋 Dimensions documented for reference
- 🔄 Easy to update images (just update config.php)
- 📦 Reliable Pixabay CDN
- 🎨 Consistent across website
- 🚀 No external dependencies broken
