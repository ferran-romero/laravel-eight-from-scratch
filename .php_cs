<?php

return PhpCsFixer\Config::create()
	->setRules([
		'@PSR2' => true,
        'array_syntax' => ['syntax' => 'short'],
        'array_indentation' => true,
        'no_multiline_whitespace_before_semicolons' => true,
        'no_unused_imports' => true,
        'no_useless_else' => true,
        'ordered_imports' => [
            'sortAlgorithm' => 'alpha',
        ],
        'phpdoc_add_missing_param_annotation' => true,
        'phpdoc_indent' => true,
        'phpdoc_no_package' => true,
        'phpdoc_order' => true,
        'phpdoc_separation' => true,
        'phpdoc_single_line_var_spacing' => true,
        'phpdoc_trim' => true,
        'phpdoc_var_without_name' => true,
        'phpdoc_to_comment' => true,
        'ternary_operator_spaces' => true,
        'trailing_comma_in_multiline_array' => true,
        'trim_array_spaces' => true,
        'blank_line_after_opening_tag' => true,
        'binary_operator_spaces' => [
            'default' => 'align_single_space_minimal',
        ],
        'no_extra_blank_lines' => [
            'tokens' => ['extra']
        ]
	])
	->setIndent("\t")
	->setLineEnding("\n");
