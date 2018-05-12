<template>
	<nav>
		<nuxt-link to="/" class="logo">
			<Logo width="22" height="22" fill="#6CD9BE" />
		</nuxt-link>

		<button class="mobile-nav-toggle" id="navToggle">
			<span style="margin: 0 12px 0 0;">El Men&uacute;</span> <i class="fas fa-angle-down"></i>
		</button>

		<div id="nav-links">
			<nuxt-link to="/" class="nav-link">Work</nuxt-link>
			<nuxt-link to="/" class="nav-link">Photography</nuxt-link>
			<nuxt-link to="/" class="nav-link">Writing</nuxt-link>
			<nuxt-link to="/" class="nav-link"><i class="fas fa-envelope fa-fw"></i></nuxt-link>
		</div>
	</nav>
</template>

<script>
import Logo from '../branding/Logo'
export default {
	components: {
		Logo
	}
}
</script>

<style lang="scss" scoped>
.logo {
	display: flex;
	flex-flow: row nowrap;
	justify-content: flex-start;
	align-items: center;
	flex-grow: 1;
	@media only screen and (min-width: 640px) {
		display: flex;
		flex-flow: row nowrap;
		justify-content: center;
		align-items: center;
		flex-grow: 0;
	}
}
nav {
	position: relative;
	display: flex;
	flex-flow: row wrap;
	justify-content: flex-start;
	align-items: center;
	width: 100%;
	height: 70px;
	margin: 0;
	padding: 0 32px;
	font-size: 12px;
	font-weight: 800;
	text-transform: uppercase;
	background-color: hsla(0,0,100,1);
	border-bottom: 1px solid;
	border-bottom-color: var(--brand-primary);
	@media only screen and (min-width: 640px) {
		flex-flow: row nowrap;
	}
	.mobile-nav-toggle {
		-moz-appearance: none;
		-webkit-appearance: none;
		appearance: none;
		display: flex;
		flex-flow: row nowrap;
		justify-content: center;
		align-items: center;
		align-self: stretch;
		margin: 0;
		padding: 0 24px;
		background-color: transparent;
		border: 0;
		border-bottom: 3px solid transparent;
		font-size: 12px;
		font-weight: 800;
		text-transform: uppercase;
		color: var(--brand-primary-dark);
		transition: 150ms ease-in-out;
		&:hover {
			color: var(--brand-primary);
			border-bottom: 3px solid var(--brand-primary);
			cursor: pointer;
			transition: 350ms ease-in-out;
		}
		@media only screen and (min-width: 640px) {
			display: none;
		}
	}
	#nav-links {
		position: absolute;
		top: calc(100% + 1px);
		right: 0;
		left: 0;
		display: flex;
		flex-flow: column nowrap;
		justify-content: flex-start;
		align-items: flex-end;
		align-self: stretch;
		width: 100%;
		padding: 0 32px;
		overflow: hidden;
		@media only screen and (min-width: 640px) {
			position: relative;
			top: unset;
			right: unset;
			left: unset;
			flex-flow: row nowrap;
			justify-content: flex-end;
			align-items: center;
			align-self: stretch;
			flex-grow: 1;
			width: auto;
			padding: 0;
		}
	}
	.nav-link {
		display: flex;
		flex-flow: row nowrap;
		justify-content: flex-end;
		align-items: center;
		margin: 6px 0;
		padding: 12px 12px;
		background-color: transparent;
		border: none;
		border-bottom: 3px solid transparent;
		color: var(--brand-primary-dark);
		text-align: right;
		text-decoration: none;
		transition: 150ms ease-in-out;
		&:last-of-type {
			margin: 0 0 0 12px;
		}
		&:hover {
			cursor: pointer;
			color: var(--brand-primary);
			border-bottom: 3px solid var(--brand-primary);
			transition: 350ms ease-in-out;
		}
		@media only screen and (min-width: 640px) {
			margin: 0;
			padding: 0 12px;
			text-align: center;
			justify-content: center;
			align-self: stretch;
		}
	}
}
</style>
