<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SliderFront extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Slider Front';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'A simple Slider Front block.';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'formatting';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'editor-ul';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post type allow list.
     *
     * @var array
     */
    public $post_types = [];

    /**
     * The parent block type allow list.
     *
     * @var array
     */
    public $parent = [];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'preview';

    /**
     * The default block alignment.
     *
     * @var string
     */
    public $align = '';

    /**
     * The default block text alignment.
     *
     * @var string
     */
    public $align_text = '';

    /**
     * The default block content alignment.
     *
     * @var string
     */
    public $align_content = '';

    /**
     * The supported block features.
     *
     * @var array
     */
    public $supports = [
        'align' => true,
        'align_text' => false,
        'align_content' => false,
        'full_height' => false,
        'anchor' => false,
        'mode' => false,
        'multiple' => true,
        'jsx' => true,
    ];

    /**
     * The block styles.
     *
     * @var array
     */
    public $styles = [
        [
            'name' => 'light',
            'label' => 'Light',
            'isDefault' => true,
        ],
        [
            'name' => 'dark',
            'label' => 'Dark',
        ]
    ];

    /**
     * The block preview example data.
     *
     * @var array
     */
    public $example = [
        'slides' => [],
        'items' => [],
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'items' => $this->items(),
            'slides' => $this->slides(),
            'image' =>$this-> image(),
        ];
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $sliderFront = new FieldsBuilder('slider_front');

        $sliderFront
        ->addRepeater('slides')
        ->addText('header')
        ->addImage('image')
            ->addRepeater('items')
                ->addText('subheading')
                ->addWysiwyg('text')
            ->endRepeater()
        ->endRepeater();

        return $sliderFront->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function items()
    {
        return get_field('items') ?: $this->example['items'];
    }
    public function slides()
    {
        return get_field('slides') ?: $this->example['slides'];
    }
    public function header()
    {
        return get_field('header') ?: $this->example['header'];
    }
    public function text()
    {
        return get_field('text') ?: $this->example['text'];
    }
    public function image()
    {
        $attachmentId = get_field('image');


        if ($attachmentId) {
            $image  = wp_get_attachment_image($attachmentId, 'full');

            return $image ;
        }

        return ''; // Return an empty string if there's no image.
    }
    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }
}
