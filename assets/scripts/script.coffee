init =
	init: ->
		# nav tooltip
		$('nav ul li').each(->
			$(@).hover(->
				$(@).children('.nav-tooltip').toggle()
				)
			)

		# Resume expand button interaction
		$('.button').on('click', ->
			$(@).children('.icon-button').toggleClass('icon-expand').toggleClass('icon-close')
			$('#resume').slideToggle()
			)

		console.log('done')

		setTimeout(
			->
				$.localScroll(
					target: 'body' # could be a selector or a jQuery object too.
					queue:true
					duration:500
					hash:false
					onBefore:( e, anchor, $target )->
						# The 'this' is the settings object, can be modified
					onAfter:( anchor, settings )->
						#The 'this' contains the scrolled element (#content)
					)
			500
			)

	sectionSizing: ->
		# set section height to browser
		$('section').css({'min-height':$(window).height()})



$(document).ready(->
	init.init()
	init.sectionSizing()
	)
$(window).resize(->
	init.sectionSizing()
	)