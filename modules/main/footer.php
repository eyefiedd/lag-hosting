<footer class="footer">
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-section">
                <div class="footer-logo">
                    <svg width="40" height="40" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="32" height="32" rx="8" fill="#8b5cf6"/>
                        <path d="M12 10L20 16L12 22V10Z" fill="white"/>
                    </svg>
                    <span class="footer-logo-text">Lag Hosting</span>
                </div>
                <p class="footer-description">
                    Há mais de 4 anos oferecendo os melhores serviços de hospedagem com qualidade e segurança.
                </p>
            </div>
        </div>
    </div>
</footer>

<style>
.footer::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 1px;
  background: linear-gradient(90deg, transparent, var(--primary), transparent);
}

.footer {
  background: linear-gradient(135deg, #0f0a1a 0%, #1a1625 100%);
  color: var(--text-secondary);
  padding: 4rem 0 2rem;
  border-top: 1px solid rgba(139, 92, 246, 0.1);
  position: relative;
}

.footer-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 2rem;
}

.footer-content {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.footer-section {
    max-width: 600px;
}

.footer-logo {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.footer-logo-text {
    font-size: 1.5rem;
    font-weight: 800;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.footer-description {
    color: var(--text-muted);
    line-height: 1.7;
}

@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        gap: 2rem;
    }
}
</style>
