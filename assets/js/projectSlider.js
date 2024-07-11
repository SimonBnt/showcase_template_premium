document.addEventListener("DOMContentLoaded", () => {
    const projectCards = document.querySelectorAll(".projectCard")

    projectCards.forEach(card => {
        const slider = card.querySelector(".projectSlider")
        const images = slider.querySelectorAll(".projectCardImg")
        const leftNav = card.querySelector(".projectCardLeftNavigation")
        const rightNav = card.querySelector(".projectCardRightNavigation")
        const indexIndicator = slider.querySelector(".projectCardImgIndexIndicator")
        let currentIndex = 0

        // Hide all images except the first one
        images.forEach((img, index) => {
            if (index !== 0) img.style.display = "none"
        })

        // Create index indicators
        images.forEach((_, index) => {
            const dot = document.createElement("span")
            dot.classList.add("indicator-dot")
            if (index === 0) dot.classList.add("active")
            indexIndicator.appendChild(dot)
        })

        const updateSlider = () => {
            images.forEach((img, index) => {
                img.style.display = index === currentIndex ? "block" : "none"
            })
            
            const dots = indexIndicator.querySelectorAll(".indicator-dot")
            dots.forEach((dot, index) => {
                dot.classList.toggle("active", index === currentIndex)
            })
        }

        leftNav.addEventListener("click", () => {
            currentIndex = (currentIndex - 1 + images.length) % images.length
            updateSlider()
        })

        rightNav.addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % images.length
            updateSlider()
        })
    })
})