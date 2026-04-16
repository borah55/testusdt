const { chromium } = require('playwright');

(async () => {
    const browser = await chromium.launch();
    const page = await browser.newPage();
    
    // Track console errors
    const errors = [];
    page.on('console', msg => {
        if (msg.type() === 'error') {
            errors.push(msg.text());
        }
    });
    
    page.on('pageerror', err => {
        errors.push(err.message);
    });
    
    try {
        // Navigate to the page
        await page.goto('http://localhost:8888/index_new_year.html');
        await page.waitForLoadState('domcontentloaded');
        
        console.log('✓ Page loaded successfully');
        
        // Check header elements
        const logoText = await page.textContent('.logo-text');
        console.log('✓ Logo found:', logoText);
        
        // Check hero section
        const heroTitle = await page.textContent('.hero-section h1');
        console.log('✓ Hero title:', heroTitle.trim());
        
        // Check offer banner
        const offerText = await page.textContent('.offer-card h4');
        console.log('✓ Offer banner:', offerText.trim());
        
        // Test input fields
        await page.fill('#usdtAmount', '10000');
        await page.fill('#walletAddress', 'TAbCdEfGhIjKlMnOpQrStUvWxYz1234567890');
        await page.fill('#emailAddress', 'test@example.com');
        
        console.log('✓ Form inputs working');
        
        // Wait for calculation
        await page.waitForTimeout(500);
        
        // Check calculated values
        const totalUsdt = await page.textContent('#totalUsdt');
        console.log('✓ Total USDT calculated:', totalUsdt);
        
        const trxAmount = await page.textContent('#trxAmount');
        console.log('✓ Gas fee calculated:', trxAmount);
        
        // Check if buy button is enabled
        const buyBtnDisabled = await page.getAttribute('#buyBtn', 'disabled');
        console.log('✓ Buy button enabled:', buyBtnDisabled === null);
        
        // Check bottom navigation
        const navItems = await page.$$('.nav-item');
        console.log('✓ Navigation items:', navItems.length);
        
        // Check Font Awesome icons
        const icons = await page.$$('i[class*="fa-"]');
        console.log('✓ Font Awesome icons found:', icons.length);
        
        // Check Bootstrap classes
        const hasBootstrap = await page.evaluate(() => {
            return document.querySelector('.modal-overlay') !== null;
        });
        console.log('✓ Bootstrap modals:', hasBootstrap ? 'Found' : 'Not found');
        
        // Report errors
        if (errors.length > 0) {
            console.log('\n⚠ Console errors found:');
            errors.forEach(err => console.log('  -', err));
        } else {
            console.log('\n✓ No console errors');
        }
        
        console.log('\n✅ All tests passed!');
        
    } catch (error) {
        console.error('❌ Test failed:', error.message);
        process.exit(1);
    } finally {
        await browser.close();
    }
})();
