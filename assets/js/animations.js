// Adicionar no final do arquivo as novas funcionalidades

// Discord Integration
function joinDiscord() {
  // Substitua pelo link real do seu servidor Discord
  window.open("https://discord.gg/laghosting", "_blank")
}

function loginWithDiscord() {
  // Implementar OAuth do Discord
  const clientId = "YOUR_DISCORD_CLIENT_ID"
  const redirectUri = encodeURIComponent(window.location.origin + "/auth/discord")
  const scope = "identify email"

  const discordAuthUrl = `https://discord.com/api/oauth2/authorize?client_id=${clientId}&redirect_uri=${redirectUri}&response_type=code&scope=${scope}`

  window.location.href = discordAuthUrl
}

// Pricing Toggle
document.addEventListener("DOMContentLoaded", () => {
  const pricingToggle = document.getElementById("pricing-toggle")
  const priceAmounts = document.querySelectorAll(".amount")

  if (pricingToggle) {
    pricingToggle.addEventListener("change", () => {
      const isYearly = pricingToggle.checked

      priceAmounts.forEach((amount) => {
        const monthlyPrice = Number.parseFloat(amount.dataset.monthly)
        const yearlyPrice = Number.parseFloat(amount.dataset.yearly)

        if (isYearly) {
          amount.textContent = yearlyPrice.toFixed(2)
        } else {
          amount.textContent = monthlyPrice.toFixed(2)
        }
      })
    })
  }

  // Animate online count
  const onlineCount = document.getElementById("online-count")
  if (onlineCount) {
    setInterval(() => {
      const currentCount = Number.parseInt(onlineCount.textContent.replace(",", ""))
      const variation = Math.floor(Math.random() * 10) - 5
      const newCount = Math.max(1200, currentCount + variation)
      onlineCount.textContent = newCount.toLocaleString()
    }, 5000)
  }

  // Service card hover effects
  const serviceCards = document.querySelectorAll(".service-card")
  serviceCards.forEach((card) => {
    card.addEventListener("mouseenter", () => {
      card.style.transform = "translateY(-10px) scale(1.02)"
    })

    card.addEventListener("mouseleave", () => {
      if (!card.classList.contains("featured")) {
        card.style.transform = "translateY(0) scale(1)"
      }
    })
  })

  // Smooth scroll for service buttons
  const serviceButtons = document.querySelectorAll(".btn-service, .btn-plan")
  serviceButtons.forEach((button) => {
    button.addEventListener("click", (e) => {
      e.preventDefault()
      // Aqui você pode implementar a lógica de compra/contratação
      alert("Redirecionando para o checkout...")
    })
  })
})

// Counter animation for stats
function animateCounter(element, target, duration = 2000) {
  let start = 0
  const increment = target / (duration / 16)

  const timer = setInterval(() => {
    start += increment
    if (start >= target) {
      element.textContent = target
      clearInterval(timer)
    } else {
      element.textContent = Math.floor(start)
    }
  }, 16)
}

// Initialize counters when in view
const observeCounters = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      const counter = entry.target
      const target = Number.parseInt(counter.dataset.target)
      if (target) {
        animateCounter(counter, target)
        observeCounters.unobserve(counter)
      }
    }
  })
})

// Observe stat numbers
document.querySelectorAll(".stat-number").forEach((stat) => {
  if (stat.textContent.includes("%")) {
    stat.dataset.target = "99.9"
  } else if (stat.textContent.includes("GB")) {
    stat.dataset.target = "500"
  } else if (stat.textContent.includes("/")) {
    stat.dataset.target = "24"
  }
  observeCounters.observe(stat)
})
