import { handleVariablesFor } from 'customizer-sync-helpers'
import {
	handleBackgroundOptionFor,
	responsiveClassesFor,
	typographyOption,
} from 'blocksy-customizer-sync'

handleVariablesFor({
	trendingBlockContainerSpacing: {
		selector: '.ct-trending-block',
		variable: 'padding',
		responsive: true,
		unit: '',
	},

	...typographyOption({
		id: 'trendingBlockPostsFont',
		selector: '.ct-trending-block .ct-item-title',
	}),

	trendingBlockFontColor: [
		{
			selector: '.ct-trending-block',
			variable: 'color',
			type: 'color:default',
			responsive: true,
		},

		{
			selector: '.ct-trending-block',
			variable: 'linkHoverColor',
			type: 'color:hover',
			responsive: true,
		},
	],

	...handleBackgroundOptionFor({
		id: 'trending_block_background',
		selector: '.ct-trending-block',
		responsive: true,
	}),
})

wp.customize('trending_block_visibility', (value) =>
	value.bind((to) =>
		responsiveClassesFor(
			'trending_block_visibility',
			document.querySelector('.ct-trending-block')
		)
	)
)
