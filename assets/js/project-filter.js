document.querySelectorAll(".filter-btn").forEach((btn) => {
	btn.addEventListener("click", () => {
		const filter = btn.dataset.filter;
		document.querySelectorAll(".project-card").forEach((card) => {
			card.style.display =
				filter === "all" || card.dataset.category === filter
					? "block"
					: "none";
		});
	});
});
